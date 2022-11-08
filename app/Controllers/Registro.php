<?php
namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\RegistroModel;
use App\Models\LoginModel;
use Config\Services;

class Registro extends BaseController
{
    protected $helpers = ['form'];
    public function registro()
    {
        
        if (strtolower($this->request->getMethod()) !== 'post') {
            return view('registro', [
                'validation' => Services::validation(),
            ]);
        }

        $rules = [
            'usuario' => 'required',
            'clave' => 'required|min_length[6]',
            'confirmacion' => 'required|matches[clave]',
            'usuario' => 'required',
            'nombre' => 'required',
            'apellido' => 'required',
            'telefono' => 'required',
        ];
        
        if (!$this->validate($rules)) {
            session()->setFlashdata('error', "Asegurate de ingresar todos los datos");
            return redirect()->to(base_url() . '/registro');
        }

        $db_model = new RegistroModel();
        $Usuario = new LoginModel();
        $datosUsuario = $Usuario->obtenerUsuario(['usuario' =>  $this->request->getPost('usuario')]);

        if (count($datosUsuario) > 0)
        {
            session()->setFlashdata('error', 'El usuario ya existe, intenta con otro');
            return redirect()->to (base_url().'/registro');
        }

        $registro = [
            'usuario' => $this->request->getPost('usuario'),
            'clave' => password_hash($this->request->getPost('clave'), PASSWORD_DEFAULT),
            'nombre' => $this->request->getPost('nombre'),
            'apellido' => $this->request->getPost('apellido'),
            'telefono' => $this->request->getPost('telefono'),
        ];

        if (($id = $db_model->create($registro)) > 0)
		{
			setcookie("usuario",  $this->request->getPost('usuario'), time() + 600,"/");
			setcookie("id", $id, time() + 600, "/");
            $registro += ['id_usuario' => $id];
            $session = session();
            $session->set($registro);
			return redirect()->to (base_url().'/');
		}
		else
        {
			return redirect()->to (base_url().'/registro');	
        }
    }
}
