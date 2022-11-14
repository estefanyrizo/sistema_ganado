<?php
namespace App\Models;
use CodeIgniter\Model;
Class UPGanadoModel extends Model{
    public function cambiarDatos($id, $datos) {
        $ganado = $this->db->table('Ganado');
        $ganado->set($datos);
        $ganado->where('id_ganado', $id);
        $ganado->update();

    }

}