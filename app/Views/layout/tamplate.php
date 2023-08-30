<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- ambil data dari Pages.php -->
    <title><?= $tittle; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- style.css ada di public > css >style.css  -->
    <!-- biasanya: "/public/css >style.css", maybe because sudah sync jadi nyambung dengan "/css/style.css" -->
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>

    <!-- panggil navbar, pake partial(include). kayak on time call, kalo "renderSection" kan sectionnya banyak ada home, about, contact -->
    <?= $this->include("layout/navbar"); ?>


    <!-- kita bikin section kayak import di react lah -->
    <?= $this->renderSection("content"); ?>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>


    <!-- buat preview create data, create.php dari view -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            // Ketika input file berubah
            $("#sampul").change(function() {
                readURL(this);
            });

            // Fungsi untuk menampilkan gambar yang dipilih
            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        // Ganti atribut src dari img-preview
                        $("#img-preview").attr("src", e.target.result);
                    };

                    reader.readAsDataURL(input.files[0]);
                }
            }
        });
    </script>
</body>

</html>