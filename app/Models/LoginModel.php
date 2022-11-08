<?php
namespace App\Models;
use CodeIgniter\Model;
Class LoginModel extends Model{
    public function obtenerUsuario($data) {
        $Usuario = $this->db->table('Usuario');
        $Usuario->where($data);
        return $Usuario->get()->getResultArray();
        
    }
}