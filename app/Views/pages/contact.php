<!-- kita panggil tamplate, dari tamplate.php -->
<?= $this->extend("layout/tamplate"); ?>

<?= $this->section("content"); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h2>Contact me</h2>
            <!-- panggil data alamat, cek Pages.php -->
            <?php foreach ($info as $a) : ?>
                <ul>
                    <li><?= $a["tipe"]; ?></li>
                    <li><?= $a["alamat"]; ?></li>
                    <li><?= $a["kota"]; ?></li>
                </ul>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>