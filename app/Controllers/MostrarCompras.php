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
use App\Models\CompraModel;
 class MostrarCompras extends BaseController{

    public function mostrar(){
        $Compra = new CompraModel;
        $compra = $Compra->mostrarCompras();
        return view("mostrar_compra", [
            'compra' => $compra,
        ]);
    }
 }