<!-- kita panggil tamplate, dari tamplate.php -->
<?= $this->extend("layout/tamplate"); ?>

<?= $this->section("content"); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1>About me</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, deserunt non. Eius quo fuga sequi earum iste dicta facilis esse aliquam neque cum eveniet recusandae mollitia obcaecati eaque, velit quidem?</p>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>