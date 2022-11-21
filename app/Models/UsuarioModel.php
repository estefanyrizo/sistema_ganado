<?php
namespace App\Models;
use CodeIgniter\Model;
Class UsuarioModel extends Model{
    public function obtenerUsuario($id) {
        $Usuario = $this->db->table('Usuario');
        $Usuario->where(['id_usuario' => $id]);
        return $Usuario->get()->getResultArray();
    }
    public function cambiarDatos($id, $datos) {
        $Usuario = $this->db->table('Usuario');
        $Usuario->set($datos);
        $Usuario->where('id_usuario', $id);
        $Usuario->update();

    }

}