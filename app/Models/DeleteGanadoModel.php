<?php
namespace App\Models;
use CodeIgniter\Model;
Class DeleteGanadoModel extends Model{
    public function eliminarDatos($id) {
        $ganado = $this->db->table('Ganado');
        $ganado->delete(['id' => $id]);
    }

}