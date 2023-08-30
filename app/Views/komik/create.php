<!-- kita panggil tamplate, dari tamplate.php -->
<?= $this->extend("layout/tamplate"); ?>

<?= $this->section("content"); ?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <h2 class="mt-4">From Tambah Data Komik</h2>
            <!-- form -->
            <!-- pertemuan ke - 9, upload file harus pake "enctype="multipart/form-data". wajib!  -->
            <form action="/komik/save" method="post" enctype="multipart/form-data">
                <!-- csrf_field, untuk mencegah hacking menggunakan fromat pages dari sumber luar -->
                <?= csrf_field(); ?>
                <!-- judul -->
                <div class="mb-3">
                    <label for="judul" class="form-label">Judul</label>
                    <!-- Tambahkan kode berikut untuk menampilkan pesan kesalahan -->
                    <input type="text" class="form-control <?php if (session()->has('validation') && session('validation')->hasError('judul')) echo 'is-invalid'; ?>" id="judul" aria-describedby="judul" name="judul" autofocus value="<?= old('judul'); ?>">
                    <!-- ini tuilisan kesalahannya -->
                    <?php if (session()->has('validation') && session('validation')->hasError('judul')) : ?>
                        <div class="invalid-feedback">
                            <?= session('validation')->getError('judul'); ?>
                        </div>
                    <?php endif; ?>
                </div>
                <!-- penulis -->
                <div class="mb-3">
                    <label for="penulis" class="form-label">Penulis</label>
                    <input type="text" class="form-control" id="penulis" name="penulis" value="<?= old('penulis'); ?>">
                </div>
                <!-- penerbit -->
                <div class="mb-3">
                    <label for="penerbit" class="form-label">Penerbit</label>
                    <input type="text" class="form-control" id="penerbit" name="penerbit" value="<?= old('penerbit'); ?>">
                </div>
                <!-- pertemuan ke - 9, upload file  -->
                <!-- sampul -->
                <div class="mb-3">
                    <label for="sampul" class="form-label customLabel">Sampul</label>
                    <!-- preview -->
                    <div class="w-25 mb-2">
                        <img id="img-preview" src="/komik/default.jpg" class="img-thumbnail imgPreview">
                    </div>
                    <input type="file" class="form-control <?php if (session()->has('validation') && session('validation')->hasError('sampul')) echo 'is-invalid'; ?>" id="sampul" name="sampul" value="<?= old('sampul'); ?>">
                    <!-- nampilin error -->
                    <?php if (session()->has('validation') && session('validation')->hasError('sampul')) : ?>
                        <div class="invalid-feedback">
                            <?= session('validation')->getError('sampul'); ?>
                        </div>
                    <?php endif; ?>
                </div>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>