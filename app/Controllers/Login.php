<?php

namespace App\Controllers;
use App\Models\Usuario;

 class Login extends BaseController{

    public function login(){
        return view("login");
    }
    public function loginp(){
        $usuario = $this->request->getPost('usuario');
        $clave = $this->request->getPost('clave');

        $Usuario = new Usuario();

        $datosUsuario = $Usuario-> obtenerUsuario(['usuario' => $usuario]);

        if(count($datosUsuario) > 0 && password_verify($clave, $datosUsuario[0]['hash']))
        {
            $data = [
                "usuario" => $datosUsuario[0]['username'],

            ];
            $session = session();
            $session->set($data);
            return redirect()->to(base_url('/'));
        }
        else{
            return redirect()->to(base_url('/login'));
        }
    }
 } 