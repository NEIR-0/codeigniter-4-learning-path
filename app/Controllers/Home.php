<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message') ;
        // return "hello world suUUUII!";
        // cek http://localhost:8080/Home/index

    }
    public function coba(): string
    {
        return "hello world suUUUII! dimana? $this->nama";
        // cek http://localhost:8080/Home/coba
        // $this->nama, BaseController.php

    }
}


// !! Catatan gw bikin: cek file app > Routes.php, liat juga bagian View > welcome_message !!
