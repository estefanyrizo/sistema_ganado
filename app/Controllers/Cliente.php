<?php
/**
 * @author Estefany Rizo
 * @version 1.0.0
 * @sinse PHP 7.4

 */

 namespace App\Controllers;
 use App\Models\ClienteModel;

 class Cliente extends BaseController{
    protected $helpers = ['form'];
    public function cliente(){
        if (strtolower($this->request->getMethod()) !== 'post') {
            return view("cliente");
        }

        $rules = [
            'nombre' => 'required',
            'cedula' => 'required',
            'telefono' => 'required',
            'direccion' => 'required',
        ];
        
        if (!$this->validate($rules)) {
            session()->setFlashdata('error', "Asegurate de ingresar todos los datos");
            return redirect()->to(base_url() . '/proveedor');
        }

        $datos = [
            'nombre' => $this->request->getPost('nombre'),
            'cedula' => $this->request->getPost('cedula'),
            'telefono' => $this->request->getPost('telefono'),
            'direccion' => $this->request->getPost('direccion'),
        ];

        $db_model = new ClienteModel();

        if (($db_model->create($datos)))
		{    session()->setFlashdata('exito', "Agregado correctamente");
			return redirect()->to (base_url().'/');
		}
		else
        {
            session()->setFlashdata('error', "No se logró ingresar :c");
			return redirect()->to (base_url().'/proveedor');	
        }

    }
 }