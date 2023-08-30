<?php
// pertemuan ke - 10, migration, seeder and faker
namespace App\Models;

use CodeIgniter\Model;

class OrangModel extends Model
{
    protected $table = "orang";
    protected $useTimestamps = true;
    protected $allowedFields = ['nama', 'alamat'];

    // searching bar, $searchBar dari Orang.php (controller) 
    public function search($searchBar)
    {
        // pake builder query, ref: https://codeigniter.com/user_guide/database/query_builder.html?highlight=query%20builder#looking-for-similar-data

        // // normalnya
        // // tablenya 'orang'
        // $builder = $this->table('orang');
        // // 'nama' dan 'alamat', sebagai key perncarian dari database.
        // $builder->like('nama', $searchBar);
        // return $builder;

        // more simple!
        return $this->table('orang')->like('nama', $searchBar)->orLike('alamat', $searchBar);
        // jangan lupa 'orLike', 'L' nya gede
    }
}
