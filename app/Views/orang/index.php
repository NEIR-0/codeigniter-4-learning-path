<!-- pertemuan ke - 10, migration, seeder and faker -->
<!-- kita panggil tamplate, dari tamplate.php -->
<?= $this->extend("layout/tamplate"); ?>

<?= $this->section("content"); ?>
<div class="container">
    <!-- searching bar -->
    <div class="row">
        <div class="col-6">
            <h1 class="mt-4">Daftar Orang</h1>
            <!-- searching form -->
            <form action="" method="post">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="masukkan nama..." name="searchbar">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="submit" name="submit">Cari</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- isi -->
    <div class="row">
        <div class="col mt-4"></a>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Alamat</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- panggil $currentPage dan jumlah data per pages which mean 6 -->
                    <!-- contoh: ini: (6 * ($currentPage - 1)). '1' buat apa? Buat logika matematikanya 1 + (6*(1-1)) = 6, sesuai jumlah data per pages -->
                    <!-- $currentPage itu sesuai urlnya, contoh: http://localhost:8080/index.php/orang?page_orang=1, disnii 'page_orang=1' which mean $currentPage = 1  -->
                    <?php $i = 1 + (6 * ($currentPage - 1));  ?>
                    <!-- panggil dari $data Orang.php (controller) -->
                    <?php foreach ($orang as $o) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <!-- cek di Models > OrangModel.php -->
                            <td><?= $o["nama"]; ?></td>
                            <td><?= $o["alamat"]; ?></td>
                            <td>
                                <a href="" type="button" class="btn btn-success">Detail</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <!-- lanjutan pager di Orang.php (controller) -->
            <!-- ...->links('tabel_database', 'nama_pagernya') ?> -->
            <!-- nama_pagernya: orang_pagination.php, ctrl+P aja -->
            <?= $pager->links('orang', 'orang_pagination') ?>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>