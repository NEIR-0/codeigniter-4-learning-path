<?php
// pertemuan ke - 5
namespace App\Controllers;

// pake ini buat data base
use \App\Models\KomikModel;


class Komik extends BaseController
{
    // baru dari bawah, pake oop buat database
    protected $komikModel;
    public function __construct()
    {
        $this->komikModel = new KomikModel();
        // biar bisa dipanggil setiap saat tanpa tulis ulang
        // !! cek  file BaseController
    }


    public function index(): string
    {
        // // cara connect database tanpa model (manual)
        // $db = \Config\Database::connect();
        // $komik = $db->query("SELECT * FROM komik");
        // // dd($komik);
        // foreach ($komik->getResultArray() as $row) {
        //     d($row);
        // }

        // cara connect database pake model
        // $komikModel = new \App\Models\KomikModel();

        // bisa juga kek gini tapi kae "use" diatas
        // $komikModel = new KomikModel(); -> pindahin ke __construct

        // pertemaun ke - 5, (part 1)
        // $komik = $this->komikModel->findAll();
        // dd($komik);

        $data = [
            'tittle' => "daftar komik",
            // lanjutan database
            // pertemaun ke - 5, (part 1)
            // 'komik' => $komik,

            // pertemaun ke - 5, (part 2)
            'komik' => $this->komikModel->getKomik()

        ];

        return view('komik/index', $data);
    }


    // pertemuan ke - 5 (part 2)
    public function detail($slug)
    {
        // echo $slug;
        // $komik  = $this->komikModel->where(["slug" => $slug])->first();
        // dd($komik);

        // more simple
        // $komik  = $this->komikModel->getKomik($slug);
        // dd($komik);
        $data = [
            'tittle' => "Detail Komik",
            'komik' => $this->komikModel->getKomik($slug)
        ];

        // cek apakah data ada atau tidak, mencegah error
        if (empty($data['komik'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('judul komik ' . $slug . ' tidak ditemukan');
        }

        return view('komik/detail', $data);
    }

    // tambah komik
    public function create()
    {
        // pertemuan ke - 7
        // session();
        // gw pindahin session(); ke basecontroller.php, cek aja di ctrl+p
        $data = [
            'tittle' => 'From Tambah',
            'validation' => \Config\Services::validation()
        ];
        return view('komik/create', $data);
    }

    // nangkep data dari tambah komik diatas
    public function save()
    {
        // pertemuan ke - 7, validation
        if (!$this->validate([
            // normalnya
            // 'judul' => 'required|is_unique[komik.judul]'

            // more advance
            'judul' => [
                'rules' => 'required|is_unique[komik.judul]',
                'errors' => [
                    'required' => '{field} komik harus diisi.',
                    'is_unique' => '{field} komik sudah terdaftar.',
                ],
            ],
            // pertemuan ke -  9, upload file
            // reff: https://codeigniter.com/user_guide/libraries/validation.html?highlight=upload#rules-for-file-uploads
            // normalnya
            // 'sampul' => 'uploaded[sampul]'

            // more complex
            'sampul' => [
                // 1024 = 1mb
                // pastikan file max di php lu lebih besar dari codeigniter 4 lu, cara cek:
                // xampp > apache > config > php.ini > cari "upload". kek gini:

                // Maximum allowed size for uploaded files.
                // https: php.net/upload-max-filesize
                // upload_max_filesize=40M

                // max gw 40M = 40mb

                // post_max_size=40M, harus sama!!
                // !!mime_in, jangan pake sepasi abis koma
                // !Baru 'uploaded[sampul]|' gw apus, karena gw dah kasih default.jpg
                'rules' => 'max_size[sampul,1024]|is_image[sampul]|mime_in[sampul,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    // !Baru 'uploaded[sampul]|' gw apus, karena gw dah kasih default.jpg
                    // 'uploaded' => 'File {field} harus diunggah.',
                    'max_size' => 'file terlalu besar!',
                    'is_image' => 'file bukan image!',
                    'mime_in' => 'yang anda pilih bukan gambar',
                ],

                // CATATAN SEMUA RULES BERJALAN TETAPI SAYANGNYA SAAT MENGGUNAKAN 'enctype="multipart/form-data"', TIDAK DAPAT nampilin error DIBAWAH INPUT.
                // COBA LU HAPUS INI 'enctype="multipart/form-data"' DI <form>, PASTI MUNCUL TAPI SAYANG TIDAK BISA INPUT FILENYA
                // TAPI KALO LU UNCOMENT INI '// dd($validation);', MUNCUL ERRONYA!
            ],
        ])) {
            $validation = \Config\Services::validation();
            // dd($validation);

            // return redirect()->to('/komik/create');
            return redirect()->to('/komik/create')->withInput()->with('validation', $validation);
        }

        // pertemuan ke - 6
        // getPost(), buat nagkep data dari method "post" di form
        // getGet(), buat nagkep data dari method "get" di form
        // getVar(), buat nagkep data dari method "post dan get" di form
        // contoh:
        // dd($this->request->getVar());

        // cek models > komikModel.php
        //  $slug = url_title(data yang diambil, separator, lowercase);
        $slug = url_title($this->request->getVar('judul'), '-', true);

        // pertemuan ke - 9, upload img
        // ambil file
        $file = $this->request->getFile('sampul');
        // cek img di upload tidak
        // kenapa '4'?, itu anggka errornya. sebenernya angka error ada banyak. '4' artinya tidak ada file yang diupload
        if ($file->getError() == 4) {
            $name = 'default.jpg';
        } else {
            // normalnya
            // $name = $file->getName();

            // generate random
            $name = $file->getRandomName();
            // pindahin file upload ke path
            $file->move(ROOTPATH . 'public\komik', $name);
        }
        // dd($name);

        $this->komikModel->save([
            'judul' => $this->request->getVar('judul'),
            'slug' => $slug,
            'penulis' => $this->request->getVar('penulis'),
            'penerbit' => $this->request->getVar('penerbit'),
            'sampul' =>  $name,
        ]);

        // notif
        session()->setFlashdata('pesan', 'Data berhasil ditambahkan');

        return redirect()->to('/komik/index');
    }


    // pertemuan ke - 8, membuat delete item
    public function delete($id)
    {
        // pertemuan ke - 9, hapus img biar gak penuh file public nya
        // cari gambarnya dulu
        $komik = $this->komikModel->find($id);
        // cek file gambar default atau tidak
        if ($komik['sampul'] != 'default.jpg') {
            // hapus gambar
            unlink('komik/' . $komik['sampul']);
        }

        $this->komikModel->delete($id);
        // notif
        session()->setFlashdata('pesan', 'Data berhasil dihapus');

        return redirect()->to('/komik/index');
    }

    // pertemuan ke - 8, membuat edit item
    public function edit($slug)
    {
        $data = [
            'tittle' => 'From ubah data komik',
            'validation' => \Config\Services::validation(),
            'komik' => $this->komikModel->getKomik($slug),
        ];
        return view('komik/edit', $data);
    }

    // // lanjutan edit
    public function update($id)
    {
        // cek judul agar gak error, biar kalo kita mau ngedit yang lain dan judulnya sam,a gak error
        $komikLama = $this->komikModel->getKomik($this->request->getVar('slug'));
        if ($komikLama['judul'] == $this->request->getVar('judul')) {
            $rule_judul = 'required';
        } else {
            // $rule_judul = 'is_unique[komik.judul]';
            $rule_judul = 'required|is_unique[komik.judul]';
        }

        // pertemuan ke - 8, validation buat slug
        if (!$this->validate([
            'judul' => [
                // 'rules' => 'required|is_unique[komik.judul]',
                'rules' => $rule_judul,
                'errors' => [
                    'required' => '{field} komik harus diisi.',
                    'is_unique' => '{field} komik sudah terdaftar.',
                ]
            ],
            // more complex
            'sampul' => [
                'rules' => 'max_size[sampul,1024]|is_image[sampul]|mime_in[sampul,image/jpg,image/jpeg,image/png]',
                'errors' => [

                    'max_size' => 'file terlalu besar!',
                    'is_image' => 'file bukan image!',
                    'mime_in' => 'yang anda pilih bukan gambar',
                ],
                // CATATAN SEMUA RULES BERJALAN TETAPI SAYANGNYA SAAT MENGGUNAKAN 'enctype="multipart/form-data"', TIDAK DAPAT nampilin error DIBAWAH INPUT.
                // COBA LU HAPUS INI 'enctype="multipart/form-data"' DI <form>, PASTI MUNCUL TAPI SAYANG TIDAK BISA INPUT FILENYA
                // TAPI KALO LU UNCOMENT INI '// dd($validation);', MUNCUL ERRONYA!
            ],
        ])) {
            $validation = \Config\Services::validation();
            // dd($validation);

            // return redirect()->to('/komik/create');
            return redirect()->to('/komik/edit/' . $this->request->getVar('slug'))->withInput()->with('validation', $validation);
        }
        // dd($this->request->getVar());

        // pertemuan ke - 9, upload file
        $file = $this->request->getFile('sampul');
        // cek gambar apakah tetap gambar lama
        if ($file->getError() == 4) {
            // sampulLama input hidden, edit.php
            $name = $this->request->getVar('sampulLama');
        } else {
            // generate random
            $name = $file->getRandomName();
            // pindahin file upload ke path
            $file->move(ROOTPATH . 'public\komik', $name);
            // hapus file yaang lama biar gak penuhin database
            unlink('komik/' . $this->request->getVar('sampulLama'));
        }
        // dd($name);

        $slug = url_title($this->request->getVar('judul'), '-', true);
        $this->komikModel->save([
            'id' => $id,
            'judul' => $this->request->getVar('judul'),
            'slug' => $slug,
            'penulis' => $this->request->getVar('penulis'),
            'penerbit' => $this->request->getVar('penerbit'),
            'sampul' => $name,
        ]);

        // notif
        session()->setFlashdata('pesan', 'Data berhasil diedit');

        return redirect()->to('/komik/index');
    }
}
