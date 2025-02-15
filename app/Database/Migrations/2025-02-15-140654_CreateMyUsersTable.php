<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateMyUsersTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'fullname' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'email' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'unique'     => true,
            ],
            'password_hash' => [  // Note: Use 'password_hash' for Shield compatibility
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'phonenumber' => [
                'type'       => 'VARCHAR',
                'constraint' => '15',
            ],
            'experience' => [
                'type' => 'BINARY',
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ]
        ]);
    
        $this->forge->addKey('id', true);
        $this->forge->createTable('myusers');
    }

    public function down()
    {
        // Drop the table if it exists
        $this->forge->dropTable('myusers', true);
    }
}
