<?php

namespace App\Controllers;

class Coba extends BaseController
{
    public function index($nameLU = "", $umur = 0): string
    {
        return "ini controller Coba method index, nama ku $nameLU, umurku $umur tahun.";
        // cek http://localhost:8080/coba/index
        // $nameLU, caranya kek gini: http://localhost:8080/coba/index/Udin%20Petot/45

        // ini pake placeholder
        // http://localhost:8080/coba/Udin%20Petot/45
        // check app>config>routes.php
    }
    public function cupu(): string
    {
        return "welcome to kiki $this->nama";
        // cek http://localhost:8080/coba/cupu
        // $this->nama, BaseController.php

    }
}


// !! Catatan gw bikin: cek file app > Routes.php, liat juga bagian View > welcome_message !!
