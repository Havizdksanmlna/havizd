<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateSoftcaseTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => true,
            ],
            'nama' => [
                'type' => 'VARCHAR',
                'constraint' => 225,
            ],
            'model_hp' => [
                'type' => 'VARCHAR',
                'constraint' => 225,
            ],
            'gambar' => [
                'type' => 'VARCHAR',
                'constraint' => 225,
            ],
            'harga' => [
                'type' => 'INT',
                'constraint' => 16
            ],
        ]);

        // Add primary key for 'id'
        $this->forge->addKey('id', true);

        // Create the 'softcase' table
        $this->forge->createTable('softcase');
    }

    public function down()
    {
        // Drop the 'softcase' table
        $this->forge->dropTable('softcase');
    }
}
