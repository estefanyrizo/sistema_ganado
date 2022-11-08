<?php

namespace App\Controllers;

use App\Models\LoginModel;
use Config\Services;

class Login extends BaseController
{
    protected $helpers = ['form'];
    public function login()
    {
        if (strtolower($this->request->getMethod()) !== 'post') {
            return view('login', [
                'validation' => Services::validation(),
            ]);
        }

        $rules = [
            'usuario' => 'required',
            'clave' => 'required',
        ];

        if (!$this->validate($rules)) {
            session()->setFlashdata('error', "Asegurate de ingresar todos los datos");
            return redirect()->to(base_url() . '/login');
        }

        $usuario = $this->request->getPost('usuario');
        $clave = $this->request->getPost('clave');

        $Usuario = new LoginModel();

        $datosUsuario = $Usuario->obtenerUsuario(['usuario' => $usuario]);

        if (count($datosUsuario) > 0 && password_verify($clave, $datosUsuario[0]['clave'])) {
            $session = session();
            $session->set($datosUsuario[0]);
            return redirect()->to(base_url('/'));
        } 
        else {
            session()->setFlashdata('error', "Usuario o contraseña incorrectos");
            return redirect()->to(base_url('/login'));
        }
    }
}
