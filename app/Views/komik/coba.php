<!-- buat percobaan! -->
if (!$this->validate([
// more advance
'judul' => [
'rules' => 'required|is_unique[komik.judul]',
'errors' => [
'required' => '{field} komik harus diisi.',
'is_unique' => '{field} komik sudah terdaftar.',
],
],
'sampul' => 'uploaded[sampul]'
])) {
$validation = \Config\Services::validation();
// dd($validation);

// return redirect()->to('/komik/create');
return redirect()->to('/komik/create')->withInput()->with('validation', $validation);
}
$slug = url_title($this->request->getVar('judul'), '-', true);

// pertemuan ke - 9, upload img
$file = $this->request->getFile('sampul');
if (!$file->isValid()) {
return "eror";
}
$file->move(ROOTPATH . 'public\komik');
$name = $file->getName();
// dd($name);

$this->komikModel->save([
'judul' => $this->request->getVar('judul'),
'slug' => $slug,
'penulis' => $this->request->getVar('penulis'),
'penerbit' => $this->request->getVar('penerbit'),
'sampul' => $name,
]);

// notif
session()->setFlashdata('pesan', 'Data berhasil ditambahkan');

return redirect()->to('/komik/index');
}