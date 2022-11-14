<?php

/**
 * Clase controladora para cargar la vista de inicio de la app web
 * @name Principal
 * @author Estefany Rizo
 * @version 1.0.0
 * @sinse PHP 7.4

 */

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\GanadoModel;
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
        
    }

}
