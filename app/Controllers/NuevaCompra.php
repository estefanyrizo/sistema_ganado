<?php

namespace App\Controllers;

use App\Models\RazaModel;
use App\Models\GanadoModel;
use App\Models\ProveedorModel;
use PhpParser\Node\Expr\New_;

class NuevaCompra extends BaseController
{
    protected $helpers = ['form'];
    public function Inicio()
    {
        if (strtolower($this->request->getMethod()) !== 'post') {
            return view("Compra/inicio");
        }
        return redirect()->to(base_url() . '/compra/novillo');
    }
    public function Novillo()
    {
        if (strtolower($this->request->getMethod()) !== 'post') {
            $Raza = new RazaModel();
            $raza = $Raza->obtenerRaza();
            return view("Compra/novillo", [
                'raza' => $raza,
            ]);
        }
        $rules = [
            'nombre' => 'required',
            'raza' => 'required',
            'fechaNacimiento' => 'required',
            'color' => 'required',
            'tamaño' => 'required',
            'peso' => 'required',
            'codigo' => 'required',
        ];

        if (!$this->validate($rules)) {
            session()->setFlashdata('error', "Asegurate de ingresar todos los datos");
            return redirect()->to(base_url() . '/ganado');
        }

        $db_model = new GanadoModel();

        $registro = [
            'nombre' => $this->request->getPost('nombre'),
            'FK_id_raza' => $this->request->getPost('raza'),
            'fecha_nacimiento' => $this->request->getPost('fechaNacimiento'),
            'color' => $this->request->getPost('color'),
            'tamaño' => $this->request->getPost('tamaño'),
            'peso' => $this->request->getPost('peso'),
            'comentario' => $this->request->getPost('comentario'),
            'codigo_chapa' => $this->request->getPost('codigo'),
            'FK_id_tipoAdquisicion' => $this->request->getPost('adquicision'),
            'FK_id_finca' => '1',
        ];

        if (($id = $db_model->create($registro)) > 0) {
            session()->setFlashdata('exito', "Novillo ingresado correctamente");
            setcookie("novillo",  $id, time() + 1000,"/compra/compra");
            return redirect()->to(base_url() . '/compra/proveedor');
        } else {
            return redirect()->to(base_url() . '/compra/novillo');
        }
    }
    public function Proveedor()
    {
        $db_model = new ProveedorModel();
        $proveedor = $db_model->obtenerProveedores();
        if (strtolower($this->request->getMethod()) !== 'post') {
            return view("Compra/proveedor", [
                'proveedor' => $proveedor,
            ]);
        }
        $rules = [
            'proveedor' => 'required',
        ];

        if (!$this->validate($rules)) {
            session()->setFlashdata('error', "Asegurate de seleccionar un proveedor");
            return redirect()->to(base_url() . '/compra/proveedor');
        }

        setcookie("proveedor",   $this->request->getPost('proveedor'), time() + 1000,"/compra/compra");
        return redirect()->to(base_url() . '/compra/compra');

    }
    public function Compra()
    {
        $novillo = $_COOKIE["novillo"];
        $proveedor = $_COOKIE["proveedor"];
        $model_ganado = new GanadoModel();
        $model_proveedor = new ProveedorModel(); 
        $data_novillo = $model_ganado->leerNovillo($novillo);
        $data_proveedor = $model_proveedor->obtenerProveedor($novillo);
        $monto = $data_novillo[0]["precio"] * $data_novillo[0]["peso"];
        if (strtolower($this->request->getMethod()) !== 'post') {
            return view("Compra/compra", [
                'proveedor' => $data_proveedor,
                'novillo' => $data_novillo,
                'monto' => $monto,
                ]
            );
        }
    }
}
