<!-- kita panggil tamplate, dari tamplate.php -->
<?= $this->extend("layout/tamplate"); ?>

<?= $this->section("content"); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1>Hello, world! ini bagian home</h1>
            <?php
            // ini d($var), kayak var_damp di php
            // var_dump($random);
            // d($random);

            // d-d = var_dump - die
            // dd($random)
            ?>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>