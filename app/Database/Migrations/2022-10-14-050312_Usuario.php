<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Usuario extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_usuario' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'usuario' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'clave' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'nombre' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'apellido' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'telefono' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'biografia' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],   
        ]);
        $this->forge->addKey('id_usuario', true);
        $this->forge->createTable('Usuario');
    }

    public function down()
    {
        $this->forge->dropTable('Usuario');
    }
}
