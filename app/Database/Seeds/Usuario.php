<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Usuario extends Seeder
{
    public function run()
    {
        $usuario = "Admin";
        $clave = password_hash("123", PASSWORD_DEFAULT);
        $nombre = "Estefany";
        $apellido = "Rizo";
        $telefono = "+50583621547";
        $biografia = "Me gusta el pan";
        $data = [
            'usuario' => $usuario,
            'clave'    => $clave,
            'nombre'    => $nombre,
            'apellido'  => $apellido,
            'telefono'  => $telefono,
            'biografia' => $biografia, 
        ];

        // Using Query Builder
        $this->db->table('usuario')->insert($data);
    }
}
