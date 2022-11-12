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

 class MostrarGanado extends BaseController{

    public function mostrar(){
        $Ganado = new GanadoModel;
        $ganado = $Ganado->leerGanado();
        return view("mostrar_ganado", [
            'ganado' => $ganado,
        ]);
    }
 }