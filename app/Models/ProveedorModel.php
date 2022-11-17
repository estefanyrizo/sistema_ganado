<?php
namespace App\Models;
use CodeIgniter\Model;

class ProveedorModel extends Model 
{
	protected $table = 'Proveedor';

	public function leerProveedor () 
	{
		return $this->findAll();
	}

	public function create ($datos)
	{
		$tb_usuario = $this->db->table ('Proveedor'); //Indicar que el insert se hace en Usuario
		//Ejecutar la consulta para insertar
		$tb_usuario->insert($datos);
		//Retornar el Id que se ha asignado al registro
		return $this->db->insertID ();
	}//Fin de create

	public function obtenerProveedores() {
        $Proveedor = $this->db->table('Proveedor');
        return $Proveedor->get()->getResultArray();
    }

	public function obtenerProveedor($id) 
	{
		$ganado = $this->db->table('Proveedor');
		$ganado->select('*');
		$ganado->where('id_proveedor', $id);
		return $ganado->get()->getResultArray();
	}
	
	
	
}//Fin de la clase