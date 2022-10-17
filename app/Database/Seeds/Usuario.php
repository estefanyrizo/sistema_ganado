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
        $correo = "admin@gmail.com";
        $isAdmin = 1;
        $foto_perfil = "https://sistemas.com/termino/wp-content/uploads/Usuario-Icono.jpg";
        $data = [
            'username' => $usuario,
            'hash'    => $clave,
            'nombre'    => $nombre,
            'apellido'  => $apellido,
            'telefono'  => $telefono,
            'biografia' => $biografia, 
            'correo' => $correo,
            'isAdmin' => $isAdmin,
            'foto_perfil' => $foto_perfil
        ];

        // Using Query Builder
        $this->db->table('usuario')->insert($data);
    }
}