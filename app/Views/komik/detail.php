<!-- kita panggil tamplate, dari tamplate.php -->
<?= $this->extend("layout/tamplate"); ?>

<?= $this->section("content"); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="mt-4">Detail Komik</h2>
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="/komik/<?= $komik['sampul']; ?>" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?= $komik['judul']; ?></h5>
                            <!-- penulis -->
                            <p class="card-text"><small class="text-body-secondary"><b>penulis: </b><?= $komik['penulis']; ?></small></p>

                            <!-- penerbit -->
                            <p class="card-text"><small class="text-body-secondary"><b>Penerbit: </b><?= $komik['penerbit']; ?></small></p>

                            <!-- edit button -->
                            <!-- perteuan ke - 8, edit button -->
                            <a href="/komik/edit/<?= $komik['slug']; ?>" type="button" class="btn btn-warning">Edit</a>


                            <!-- pertemuan ke - 8, membuat delete by id  -->
                            <!-- delete button -->
                            <form action="/komik/delete/<?= $komik['id']; ?>" method="post" class="d-inline">
                                <!-- tambahini ini, biar gak mudah di hacking -->
                                <?= csrf_field(); ?>
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin?');">Delete</button>
                            </form>
                            <!-- <a href="/komik/delete/<?= $komik['id']; ?>" type="button" class="btn btn-danger">Delete</a> -->

                            <!-- back button -->
                            <a href="/komik/index" type="button" class="btn btn-success">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>