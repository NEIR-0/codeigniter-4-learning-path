<?php

namespace App\Models;

use CodeIgniter\Model;

// cari file "Model". ctrl+p, lalu nama file. buat check apa aja yang boleh di pake dan di edit
// yang di file "vedor" ya banh :v
class KomikModel extends Model
{
    // cek di Model.php
    // basenya kan cuman "protected $table", karena table kita namanya "komik" jadi kita timpah kek gini
    protected $table = "komik";

    // cek juga disini: https://codeigniter.com/user_guide/models/model.html
    protected $useTimestamps = true;

    // pertemuan ke - 6, tambah komik
    protected $allowedFields = ['judul', 'slug', 'penulis', 'penerbit', 'sampul'];

    // pertemuan ke - 5, (part 2)
    public function getKomik($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }

        return $this->where(["slug" => $slug])->first();
    }
}
