<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index(): string
    {
        // pertemuan ke 10, membuat data faker
        // $faker = \Faker\Factory::create();
        // dd($faker->name);

        // // pertemuan - 3
        // // bikin data, untuk bedaain tittlenya cek di header.php
        // $data = [
        //     'tittle' => "home",
        //     // contoh lain
        //     'random' => ["satu", "dua", "tiga"],
        // ];
        // echo view('layout/header', $data);
        // echo view('pages/home');
        // return view('layout/footer');
        // // cek file Views > layout > header.php
        // // cek file Views > pages > home.php
        // // cek file Views > layout > footer.php
        // // edingnnya harus "retrun", aneh..


        // pertemuan ke - 4
        $data = [
            'tittle' => "home",
            // contoh lain
            'random' => ["satu", "dua", "tiga"],
        ];
        return view('pages/home', $data);
    }

    public function about(): string
    {
        // // pertemuan - 3
        // // bikin data, untuk bedaain tittlenya cek di header.php
        // $data = [
        //     'tittle' => "about me"
        // ];
        // echo view('layout/header', $data);
        // echo view('pages/about');
        // return view('layout/footer');
        // // cek file Views > pages > about.php
        // // cek file Views > layout > footer.php
        // // edingnnya harus "retrun", aneh..


        // pertemuan - 4
        $data = [
            'tittle' => "about me"
        ];
        return view('pages/about', $data);
    }


    // pertemuan - 4
    public function contact()
    {
        $data = [
            'tittle' => "Contact",
            'info' => [
                [
                    "tipe" => "rumah",
                    "alamat" => "jl. kota kenangan tanpa arah no.39",
                    "kota" => "bandung",
                ],
                [
                    "tipe" => "kantor",
                    "alamat" => "dirumah saja!",
                    "kota" => "jakarta",
                ]
            ]
        ];
        return view('pages/contact', $data);
    }
}


// !! Catatan gw bikin: cek file app > Routes.php, liat juga bagian View > welcome_message !!
