<!-- kita panggil tamplate, dari tamplate.php -->
<?= $this->extend("layout/tamplate"); ?>

<?= $this->section("content"); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <!-- Pertemuan ke - 6,  CRUD -->
            <!-- tombol tambah -->
            <a href="/komik/create" class="btn btn-primary mt-4">Tambah komik</a>
            <!-- pertemuan ke 5 -->
            <h1 class="mt-4">Daftar Komik</h1>

            <!-- pertemuan ke - 6, cek di controller Komik.php -->
            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('pesan'); ?>
                </div>
            <?php endif; ?>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Sampul</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- normalnya -->
                    <!-- <tr>
                        <th scope="row">1</th>
                        biasanya: "/public/komik/naruto.jpg", maybe because sudah sync jadi nyambung dengan "/komik/naruto.jpg"
                        <td><img src="/komik/naruto.jpg" alt="" class="sampul"></td>
                        <td>Naruto</td>
                        <td>
                            <a href="" type="button" class="btn btn-success">buy</a>
                        </td>
                    </tr> -->

                    <!-- kita looping dari database phpmyadmin -->
                    <?php $i = 1;  ?>
                    <?php foreach ($komik as $k) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><img src="/komik/<?= $k["sampul"]; ?>" alt="" class="sampul"></td>
                            <td><?= $k["judul"]; ?></td>
                            <td>
                                <a href="/komik/index/<?= $k["slug"]; ?>" type="button" class="btn btn-success">Detail</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>