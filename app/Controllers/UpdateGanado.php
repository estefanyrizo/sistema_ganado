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

    public function mostrar(int $id){
        $Ganado = new GanadoModel;
        $ganado = $Ganado->leerNovillo($id);
        return view("udateGanado", [
            'ganado' => $ganado,
        ]);
    }
 }