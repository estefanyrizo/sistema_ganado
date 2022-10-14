<?php
namespace App\Models;
use CodeIgniter\Model;
Class Usuario extends Model{
    public function obtenerUsuario($data) {
        $Usuario = $this->db->table('Usuario');
        $Usuario->where($data);
        return $Usuario->get()->getResultArray();
    }
}