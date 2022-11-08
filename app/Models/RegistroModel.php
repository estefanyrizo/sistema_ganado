<?php
namespace App\Models;
use CodeIgniter\Model;

class RegistroModel extends Model 
{
	protected $table = 'Usuario';

	public function leerUsuario () 
	{
		return $this->findAll();
	}

	public function create ($datos)
	{
		$tb_usuario = $this->db->table ('Usuario'); //Indicar que el insert se hace en Usuario
		//Ejecutar la consulta para insertar
		$tb_usuario->insert($datos);
		//Retornar el Id que se ha asignado al registro
		return $this->db->insertID ();
	}//Fin de create
	
	
}//Fin de la clase