<?php
namespace App\Models;
use CodeIgniter\Model;
Class RazaModel extends Model{
    public function obtenerRaza() {
        $Raza = $this->db->table('Raza');
        return $Raza->get()->getResultArray();
    }
    
}