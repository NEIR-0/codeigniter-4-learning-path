<?php
// pertemuan ke - 10, migration, seeder and faker
namespace App\Controllers;

// pake ini buat data base
// cek di Models > OrangModel
use \App\Models\OrangModel;

// jangan lupa sesuai nama class dengan nama file
class Orang extends BaseController
{
    // baru dari bawah, pake oop buat database
    protected $orangModel;
    public function __construct()
    {
        $this->orangModel = new OrangModel();
    }


    public function index(): string
    {
        // urutin number agar sesuai pagination, biar dinamis dan gak static
        // page_orang dari url nya. contoh: http://localhost:8080/index.php/orang?page_orang=1
        // $this->request->getVar('page_orang');
        $currentPage =  $this->request->getVar('page_orang') ? $this->request->getVar('page_orang') : 1;

        // searching form, (View > orang > index.php)
        // d($this->request->getVar('searchbar'));
        $searchBar = $this->request->getVar('searchbar');
        if ($searchBar) {
            // cek orangModel.php (Models)
            $orang = $this->orangModel->search($searchBar);
        } else {
            $orang = $this->orangModel;
        }

        $data = [
            'tittle' => "daftar orang",
            // 'orang' => $this->orangModel->findAll(),

            // pake paginations, reff:https://codeigniter.com/user_guide/libraries/pagination.html?highlight=paginations
            // paginate(6), angka dalam () menentukan jumlah data yang ditampilkan. dam selanjutnya nama table dari data base (orang)
            // lama!
            // 'orang' => $this->orangModel->paginate(6, 'orang'),
            // baru!
            'orang' => $orang->paginate(6, 'orang'),

            // pager kayak jumlah page 1,2,3,4,5 dst. Cek index.php (Views > orang)
            'pager' => $this->orangModel->pager,

            // panggil curent page
            'currentPage' => $currentPage,
        ];
        return view('orang/index', $data);
    }
}
