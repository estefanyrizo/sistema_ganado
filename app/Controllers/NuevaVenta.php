<?php

namespace App\Controllers;
use Dompdf\Dompdf;
use App\Models\GanadoModel;
use App\Models\ClienteModel;
use App\Models\VentaModel;
use App\Models\UPGanadoModel;
class NuevaVenta extends BaseController
{
    protected $helpers = ['form'];
    public function inicio()
    {
        if (strtolower($this->request->getMethod()) !== 'post') {
            return view("Venta/inicio");
        }
        return redirect()->to(base_url() . '/venta/novillo');
    }
    public function novillo()
    {
        if (strtolower($this->request->getMethod()) !== 'post') {
            return view("Venta/novillo");
        }
        $rules = [
            'peso' => 'required',
            'codigo' => 'required',
        ];

        if (!$this->validate($rules)) {
            session()->setFlashdata('error', "Asegurate de ingresar todos los datos");
            return redirect()->to(base_url() . '/venta/novillo');
        }

        $db_model = new GanadoModel();

        $peso_ganado = $this->request->getPost('peso');

        setcookie("peso_ganado",  $peso_ganado, time() + 6000, "/");
        $ganado = $db_model->leerNovilloChapa($this->request->getPost('codigo'));

        if (count($ganado) > 0) {
            setcookie("novillo",  $ganado[0]["id_ganado"], time() + 6000, "/");
            return redirect()->to(base_url() . '/venta/cliente');
        } else {
            session()->setFlashdata('error', "El codigo de chapa no pertenece a ningun novillo");
            return redirect()->to(base_url() . '/venta/novillo');
        }
    }
    public function cliente()
    {
        $db_model = new ClienteModel();
        $cliente = $db_model->obtenerClientes();
        if (strtolower($this->request->getMethod()) !== 'post') {
            return view("Venta/cliente", [
                'cliente' => $cliente,
            ]);
        }
        $rules = [
            'cliente' => 'required',
        ];

        if (!$this->validate($rules)) {
            session()->setFlashdata('error', "Asegurate de seleccionar un Cliente");
            return redirect()->to(base_url() . '/venta/cliente');
        }

        setcookie("cliente",   $this->request->getPost('cliente'), time() + 6000,"/");
        return redirect()->to(base_url() . '/venta/confirmar');

    }
    public function venta()
    {
        $novillo = $_COOKIE["novillo"];
        $cliente = $_COOKIE["cliente"];
        $peso_ganado = $_COOKIE["peso_ganado"];
        setcookie("novillo",  $novillo, time() - 6000);
        setcookie("cliente",   $cliente, time() - 6000);
        $model_ganado = new GanadoModel();
        $model_cliente = new ClienteModel(); 
        $data_novillo = $model_ganado->leerNovillo($novillo);
        $data_cliente = $model_cliente->obtenerCliente($cliente);
        $monto = $data_novillo[0]["precio"] * $peso_ganado;
        if (strtolower($this->request->getMethod()) !== 'post') {
            return view("Venta/venta", [
                'cliente' => $data_cliente,
                'novillo' => $data_novillo,
                'monto' => $monto,
                ]
            );
        }
        $totalNeto = $monto - $this->request->getPost('rebaja');
        $datos_venta = [
            "cantidad" => "1",
            "total" => $totalNeto,
            "fecha" => date('m-d-Y'),
            "FK_id_tipoVenta" => "1",
            "FK_id_cliente" => $cliente,
            "FK_id_usuario" => $_SESSION['id_usuario'],
            "rebaja"  => $this->request->getPost('rebaja'),
        ];
        $Venta= new VentaModel();
        $venta = $Venta->createVenta($datos_venta);
        $datos_detalleVenta = [
            "peso_ganado" => $peso_ganado,
            "monto" => $monto,
            "FK_id_venta" => $venta,
            "FK_id_ganado" => $novillo,
        ]; 
        $detalleVenta =  $Venta->createDetalleVenta($datos_detalleVenta);
        $up_ganado = new UPGanadoModel();
        $up_ganado->cambiarEstado($novillo);
        session()->setFlashdata('exito', "Venta ingresada correctamente");
        return redirect()->to(base_url() . '/venta_pdf/'. $detalleVenta);
    }

    public function demoPDF($id)
    {
        $Venta = new VentaModel();
        $datosVenta = $Venta->mostrarVenta($id);
        $dompdf = new Dompdf();
        $dompdf->loadHTML(view("pdf",['venta' => $datosVenta]));
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();
        $dompdf->stream();
        return redirect()->to(base_url() . '/');
    }
}
