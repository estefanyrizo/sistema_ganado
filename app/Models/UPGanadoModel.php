<?php
namespace App\Models;
use CodeIgniter\Model;
Class UPGanadoModel extends Model{
    public function cambiarDatos($id, $datos) {
        $Usuario = $this->db->table('Ganado');
        $Usuario->set($datos);
        $Usuario->where('id_ganado', $id);
        $Usuario->update();

    }

}