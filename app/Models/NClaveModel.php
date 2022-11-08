<?php
namespace App\Models;
use CodeIgniter\Model;
Class NClaveModel extends Model{
    public function obtenerUsuario($id) {
        $Usuario = $this->db->table('Usuario');
        $Usuario->where(['id_usuario' => $id]);
        return $Usuario->get()->getResultArray();
    }
    public function cambiarClave($id, $nClave) {
        $Usuario = $this->db->table('Usuario');
        $Usuario->set('clave', $nClave);
        $Usuario->where('id_usuario', $id);
        $Usuario->update();

    }

}