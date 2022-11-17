<?php
namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\RazaModel;
use App\Models\GanadoModel;
use Config\Services;

class GestionarGanado extends BaseController
{
    protected $helpers = ['form'];
    public function ganado()
    {
        $Raza = new RazaModel();
        $raza = $Raza->obtenerRaza(); 
        if (strtolower($this->request->getMethod()) !== 'post') {
            return view('ingresar_ganado', [
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

        if (($id = $db_model->create($registro)) > 0)
		{
            session()->setFlashdata('exito', "Novillo ingresado correctamente");
			return redirect()->to (base_url().'/');
		}
		else
        {
			return redirect()->to (base_url().'/ganado');	
        }
    }
}
