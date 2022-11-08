<?php

namespace App\Controllers;
use App\Models\NClaveModel;
use Config\Services;

 class NuevaClave extends BaseController{

    protected $helpers = ['form'];
    public function nuevaClave()
    {
        if (strtolower($this->request->getMethod()) !== 'post') {
            return view('nueva_clave', [
                'validation' => Services::validation(),
            ]);
        }

        $rules = [
            'anterior' => 'required',
            'clave' => 'required|min_length[6]',
            'confirmacion' => 'required|matches[clave]',
        ];

        if (!$this->validate($rules)) {
            session()->setFlashdata('error', "Asegurate de ingresar todos los datos");
            return redirect()->to(base_url() . '/clave');
        }

        $anterior = $this->request->getPost('anterior');
        $clave = $this->request->getPost('clave');

        $NuevaClave = new NClaveModel();


        setcookie("id",  $_SESSION['id_usuario'], time() + 600, "/");
        $datosUsuario = $NuevaClave->obtenerUsuario(['id' => session('id_usuario')]);

        if (count($datosUsuario) > 0 && password_verify($anterior, $datosUsuario[0]['clave'])) {
            $NuevaClave->cambiarClave(['id' => session('id_usuario')], ['clave' => password_hash($clave, PASSWORD_DEFAULT)]);
            session()->setFlashdata('exito', "Clave actualizada");
            return redirect()->to(base_url('/'));
        } 
        else {
            session()->setFlashdata('error', "Clave anterior incorrecta");
            return redirect()->to(base_url('/clave'));
        }
    }
 }