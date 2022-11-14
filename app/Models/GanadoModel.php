<?php
namespace App\Models;
use CodeIgniter\Model;
Class GanadoModel extends Model{
    protected $table = 'Ganado';

	public function leerGanado() 
	{
		$ganado = $this->db->table('Ganado');
		$ganado->select('*');
		$ganado->join('Raza', 'Raza.id_raza = Ganado.FK_id_raza', 'inner');
		return $ganado->get()->getResultArray();
	}

	public function leerNovillo($id) 
	{
		$ganado = $this->db->table('Ganado');
		$ganado->select('*');
		$ganado->join('Raza', 'Raza.id_raza = Ganado.FK_id_raza', 'inner');
		$ganado->where('id_ganado', $id);
		return $ganado->get()->getResultArray();
	}


	public function create ($datos)
	{
		$tb_usuario = $this->db->table ('Ganado');
		$tb_usuario->insert($datos);
		return $this->db->insertID ();
	}
    
}