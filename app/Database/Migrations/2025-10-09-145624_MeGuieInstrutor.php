<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class MeGuieInstrutor extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'cpf' => [
                'type'       => 'VARCHAR',
                'constraint' => '11',
            ],
            'nome' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'email' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'unique'     => true,
            ],
            'telefone_1' => [
                'type'       => 'VARCHAR',
                'constraint' => '20',
            ],
            'telefone_2' => [
                'type'       => 'VARCHAR',
                'constraint' => '20',
            ],
            'cep' => [
                'type'       => 'VARCHAR',
                'constraint' => '8',
            ],
            'cidade' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'estado' => [
                'type'       => 'VARCHAR',
                'constraint' => '55',
            ],
            'valor_hora' => [
                'type'       => 'decimal',
                'constraint' => '10,2',
            ],
            'instagram' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'facebook' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'created_at' => [
                'type'       => 'DATETIME',
                'null'       => true,
            ],
            'updated_at' => [
                'type'       => 'DATETIME',
                'null'       => true,
            ],
            'deleted_at' => [
                'type'       => 'DATETIME',
                'null'       => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('me_guie_instrutores');
    }

    public function down()
    {
        $this->forge->dropTable('me_guie_instrutores');
    }
}
