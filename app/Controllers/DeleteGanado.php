<?php
/**
 * @author Estefany Rizo
 * @version 1.0.0
 * @sinse PHP 7.4
 */

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DeleteGanadoModel;

class DeleteGanado extends BaseController
{
    public function delete(int $id)
    {

        $db_model = new DeleteGanadoModel();
        $db_model->eliminarDatos($id);
        session()->setFlashdata('exito', "Datos del novillo eliminados correctamente");
        return redirect()->to (base_url("/mostrar_ganado"));
        
    }

}