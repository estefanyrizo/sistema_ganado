<?php
namespace App\Models;
use CodeIgniter\Model;
Class GanadoModel extends Model{
    protected $table = 'Ganado';

	public function leerGanado() 
	{
		return $this->findAll();
	}

	public function create ($datos)
	{
		$tb_usuario = $this->db->table ('Ganado');
		$tb_usuario->insert($datos);
		return $this->db->insertID ();
	}
    
}