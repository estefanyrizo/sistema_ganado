<?php
/**
 * @author Estefany Rizo
 * @version 1.0.0
 * @sinse PHP 7.4
 */

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\GanadoModel;
use App\Models\UPGanadoModel;
use App\Models\RazaModel;


class UpdateGanado extends BaseController
{
    protected $helpers = ['form'];
    public function edit(int $id)
    {

        if (strtolower($this->request->getMethod()) !== 'post') {

            $Ganado = new GanadoModel;
            $Raza = new RazaModel();
            $raza = $Raza->obtenerRaza();
            $ganado = $Ganado->leerNovillo($id);
            return view("updateGanado", [
                'ganado' => $ganado,
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
            return redirect()->to(base_url() . '/info_novillo/'.$id.'/edit');
        }

        $db_model = new UPGanadoModel();
        $registro = [
            'nombre' => $this->request->getPost('nombre'),
            'FK_id_raza' => $this->request->getPost('raza'),
            'fecha_nacimiento' => $this->request->getPost('fechaNacimiento'),
            'color' => $this->request->getPost('color'),
            'tamaño' => $this->request->getPost('tamaño'),
            'peso' => $this->request->getPost('peso'),
            'comentario' => $this->request->getPost('comentario'),
            'codigo_chapa' => $this->request->getPost('codigo'),
            'FK_id_finca' => '1',
            'FK_id_tipoAdquisicion' => '1'
        ];
        $db_model->cambiarDatos($id, $registro);
        session()->setFlashdata('exito', "Datos del novillo actualizados correctamente");
        return redirect()->to (base_url().'/info_novillo/'.$id.'/edit');
        
    }

}
