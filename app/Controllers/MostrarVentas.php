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
use App\Models\VentaModel;
 class MostrarVentas extends BaseController{

    public function mostrar(){
        $Venta= new VentaModel;
        $venta = $Venta->mostrarVentas();
        return view("mostrar_venta", [
            'venta' => $venta,
        ]);
    }
 }