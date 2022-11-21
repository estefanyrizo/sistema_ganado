<?php

namespace App\Controllers;
use App\Models\UsuarioModel;
class Cuenta extends BaseController{

    protected $helpers = ['form'];
    public function edit()
    {
        $Usuario = new UsuarioModel();

        if (strtolower($this->request->getMethod()) !== 'post') {
            $usuario = $Usuario->obtenerUsuario(['id' => session('id_usuario')]);
            return view("cuenta", [
                'usuario' => $usuario,
            ]);
        } 	

        $rules = [
            'nombre' => 'required',
            'apellido' => 'required',
            'telefono' => 'required',
        ];

        if (!$this->validate($rules)) {
            session()->setFlashdata('error', "Asegurate de no eliminar los datos necesarios");
            return redirect()->to(base_url() . '/cuenta');
        }

        $datos = [
            'nombre' => $this->request->getPost('nombre'),
            'apellido' => $this->request->getPost('apellido'),
            'telefono' => $this->request->getPost('telefono'),
            'correo' => $this->request->getPost('correo'),
            'biografia' => $this->request->getPost('biografia'),
        ];
        $Usuario->cambiarDatos($_SESSION['id_usuario'], $datos);
        session()->setFlashdata('exito', "Tus datos han sido actualizados correctamente");
        return redirect()->to (base_url().'/cuenta');

    }
 }