<?php
namespace App\Models;
use CodeIgniter\Model;

class ClienteModel extends Model 
{
	protected $table = 'Cliente';

	public function leerCliente () 
	{
		return $this->findAll();
	}

	public function create ($datos)
	{
		$tb_cliente = $this->db->table ('Cliente');
		$tb_cliente->insert($datos);
		return $this->db->insertID ();
	}//Fin de create

	public function obtenerClientes() {
        $Cliente = $this->db->table('Cliente');
        return $Cliente->get()->getResultArray();
    }

	public function obtenerCliente($id) 
	{
		$cliente= $this->db->table('Cliente');
		$cliente->select('*');
		$cliente->where('id_cliente', $id);
		return $cliente->get()->getResultArray();
	}
	
	
	
}//Fin de la clase