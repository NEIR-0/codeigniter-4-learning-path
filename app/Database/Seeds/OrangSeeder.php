<?php
// pertemuan ke - 10 cuy. Migrations, seeder and faker
// seeder buat membuat data dummy untuk cek kecepatan render data
namespace App\Database\Seeds;
// buat 'created_at' and 'updated_at'
use CodeIgniter\I18n\Time;

use CodeIgniter\Database\Seeder;
// nama class sesuai nama flie: 'OrangSeeder'
class OrangSeeder extends Seeder
{
    public function run()
    {
        // awaal!!
        // $data = [
        //     [
        //         // sesuai di data base table "orang'
        //         'nama'          => 'udin',
        //         'alamat'        => 'jl. kekiri saja no.32',

        //         // ref untuk datetime:
        //         // https://codeigniter.com/user_guide/libraries/time.html?highlight=datetime
        //         'created_at'    => Time::now(),
        //         'updated_at'    => Time::now(),
        //     ],
        //     [
        //         'nama'          => 'jojo',
        //         'alamat'        => 'jl. ke kanana no.32',
        //         'created_at'    => Time::now(),
        //         'updated_at'    => Time::now(),
        //     ],
        //     [
        //         'nama'          => 'oqing',
        //         'alamat'        => 'jl. mundur aja gak sih no.32',
        //         'created_at'    => Time::now(),
        //         'updated_at'    => Time::now(),
        //     ],
        // ];

        // // ada dia cara push ke database: Simple Queries/Using Query Builder

        // // Simple Queries
        // // benerin dikit!!, samaan table data base dan $data diatas
        // // $this->db->query('INSERT INTO orang (nama, alamat, created_at, updated_at) VALUES(:nama:, :alamat:, :created_at:, :updated_at:)', $data);

        // // Using Query Builder
        // // $this->db->table('orang')->insert($data);
        // // sayangnya code diatas hanya bisa menginsert satu data array

        // // kalo mao banyak kek gini, reff:https://codeigniter.com/user_guide/database/query_builder.html?highlight=insert#insertbatch
        // $this->db->table('orang')->insertBatch($data);


        // !!baru, pake faker
        // bisa juga pake localisation, contoh 'ja_JP' = orang jepang, 'fr_FR' = orang jepang, 'id_ID' = orang indonesia coy!
        // reff localisation: https://fakerphp.github.io/locales/ja_JP/
        $faker = \Faker\Factory::create('id_ID');

        // cara agar bisa data dummy sekali banyak pake looping, contohnya 1oo data
        for ($i = 0; $i < 100; $i++) {
            $data = [
                'nama'          =>  $faker->name,
                'alamat'        => $faker->address,
                // unixTime, detik yang telah lalu (integer), harus dibah ke string pake: Time::createFromTimestamp
                // reff: https://codeigniter.com/user_guide/libraries/time.html?highlight=datetime#createfromdate
                // !! TAPI RANDOM BUKAN NOW/SAAT ITU JUGA (created_at) nya!!
                'created_at'    => Time::createFromTimestamp($faker->unixTime),
                'updated_at'    => Time::now(),
            ];
            $this->db->table('orang')->insert($data);
        }
    }
}

// cara running seeder!
// php spark db:seed nama_file(tanpa '.php'), contoh:
// php spark db:seed OrangSeeder

// !!Cara menghapus isi table:
// phpmyadmin > operasi > kosongkan tabel (TRUNCATE)
// sehingga id yang auto increment akan dimulai dari 0 lagi