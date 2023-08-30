<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Member extends Migration
{
    public function up()
    {
        // Members
        $this->forge->addField([
            'id_member'        => ['type' => 'int', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'email'            => ['type' => 'varchar', 'constraint' => 255],
            'username'         => ['type' => 'varchar', 'constraint' => 30, 'null' => true],
            'slug'             => ['type' => 'varchar', 'constraint' => 255, 'null' => true],
            'name'             => ['type' => 'varchar', 'constraint' => 255, 'null' => true],
            'kelamin'          => ['type' => 'tinyint', 'constraint' => 1, 'null' => 0, 'default' => 0],
            'jabatan'          => ['type' => 'varchar', 'constraint' => 255, 'null' => true],
            'instansi'         => ['type' => 'varchar', 'constraint' => 255, 'null' => true],
            'kab_kota'         => ['type' => 'varchar', 'constraint' => 255, 'null' => true],
            'propinsi'         => ['type' => 'varchar', 'constraint' => 255, 'null' => true],
            'partai'           => ['type' => 'varchar', 'constraint' => 255, 'null' => true],
            'whatsapp'         => ['type' => 'varchar', 'constraint' => 255, 'null' => true],
            'email'            => ['type' => 'varchar', 'constraint' => 255, 'null' => true],
            'refferal'         => ['type' => 'varchar', 'constraint' => 255, 'null' => true],
            'sampul'           => ['type' => 'varchar', 'constraint' => 255, 'null' => true],
            'user_image'       => ['type' => 'varchar', 'constraint' => 255, 'default' => 'default.svg'],
            'checkin_at'       => ['type' => 'datetime', 'null' => true],
            'checkout_at'      => ['type' => 'datetime', 'null' => true],
            'event'            => ['type' => 'varchar', 'constraint' => 255, 'null' => true],
            'status_event'     => ['type' => 'varchar', 'constraint' => 255, 'null' => true],
            'aktivasi'         => ['type' => 'tinyint', 'constraint' => 1, 'null' => 0, 'default' => 0],
            'created_at'       => ['type' => 'datetime', 'null' => true],
            'updated_at'       => ['type' => 'datetime', 'null' => true],
            'deleted_at'       => ['type' => 'datetime', 'null' => true],
        ]);

        $this->forge->addKey('id_member', true);
        $this->forge->addUniqueKey('email');
        $this->forge->addUniqueKey('username');

        $this->forge->createTable('member', true);
    }

    public function down()
    {
        $this->forge->dropTable('member', true);
    }
}
