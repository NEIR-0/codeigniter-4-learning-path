<?php
// pertemuan ke - 10 cuy. Migrations, seeder and faker
// create Migrations: 'php spark migrate:create nama_file'

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
// reff buat Migration: https://codeigniter.com/user_guide/dbmgmt/migration.html?highlight=migra#CodeIgniter\Database\MigrationRunner

class Orang extends Migration
{
    // up(), untuk membuat skema baru data base. Kayak nambahin fields/ngubah tipe data
    public function up()
    {
        // iki data base mas
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                // unsigned, agar nilai positif
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'alamat' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'created_at' => [
                'type'       => 'DATETIME',
                'null' => TRUE,
            ],
            'updated_at' => [
                'type'       => 'DATETIME',
                'null' => TRUE,
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('orang');
    }

    // down(), menghapus database
    public function down()
    {
        $this->forge->dropTable('orang');
    }
}


// 'php spark migrate', untuk eksekusi file ini. Bikin databbase baru
// PERINGATAN!: 'php spark migrate', akan ekseuksi semmua file migrate yang ada!!
// nantik akan muncul table dengan nama 'orang' dan default table 'migrations'. yang 'migrations' jangan diapus karena penting untuk controller gitu lah