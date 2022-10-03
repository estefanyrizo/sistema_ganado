<?php
/**
 * Clase controladora para cargar la vista de inicio de la app web
 * @name Principal
 * @author Estefany Rizo
 * @version 1.0.0
 * @sinse PHP 7.4

 */

 namespace App\Controllers;

 class Principal extends BaseController{

    public function index(){
        return view("inicio");
    }
 }