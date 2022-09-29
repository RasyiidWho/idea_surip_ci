<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>CV. Idea Sejahtera</title>
    <link rel="icon" href="assets/img/logo.jpg">
</head>

<body>

    <!-- Header -->
    <div class="container">
        <img src="<?= base_url() ?>/assets/img/Header.jpg" alt="" style="width : 100% ;">
    </div>
    <!-- End header -->

    <!-- Navbar -->
    <!-- Image and text -->
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar navbar-dark" style="background-color: #00478F;">
            <a class="navbar-brand" href="<?= base_url() ?>">
                <img src="<?= base_url() ?>/assets/img/logo.png" width="70" height="30" alt="">
            </a>
            <!-- <a class="navbar-brand" href="#">Idea Sejahtera</a> -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?= base_url() ?>">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Tentang Kami</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Panduan</a>
                    </li>
                    <li class="nav-item active dropdown ">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Kategori
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Agama</a>
                            <a class="dropdown-item" href="#">Bahasa & Sastra</a>
                            <a class="dropdown-item" href="#">Bahasa Inggris</a>
                            <a class="dropdown-item" href="#">Biografi & Sejarah</a>
                            <a class="dropdown-item" href="#">Budaya & Seni</a>
                            <a class="dropdown-item" href="#">Buku Cerita & Novel</a>
                            <a class="dropdown-item" href="#">Buku Sekolah</a>
                            <a class="dropdown-item" href="#">Ekonomi & Bisnis</a>
                            <a class="dropdown-item" href="#">Filsafat</a>
                            <a class="dropdown-item" href="#">Gender</a>
                            <a class="dropdown-item" href="#">Hukum & Pemerintahan</a>
                            <a class="dropdown-item" href="#">Kamus</a>
                            <a class="dropdown-item" href="#">Komunikasi</a>
                            <a class="dropdown-item" href="#">Lingkungan</a>
                            <a class="dropdown-item" href="#">Manajemen</a>
                            <a class="dropdown-item" href="#">Matematika</a>
                            <a class="dropdown-item" href="#">Pendidikan</a>
                            <a class="dropdown-item" href="#">Psikologi </a>
                            <a class="dropdown-item" href="#">Sains & Teknik</a>
                            <a class="dropdown-item" href="#">Sosial & Politik</a>
                            <a class="dropdown-item" href="#">Sosiologi</a>
                            <a class="dropdown-item" href="#">Statistik & Penelitian</a>
                            <a class="dropdown-item" href="#">Umum</a>
                        </div>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Kontak</a>
                    </li>
                </ul>
                <form class="form-inline" style="margin-left: 30% ;">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>
    </div>
    <!-- end navbar -->

    <!-- konten -->
    <div class="container mt-3">
        <div class="row">
            <div class="col-sm-2">
                <div class="row">
                    <div class="col-sm">
                        <div class="card" style="">
                            <div class="card-body">
                                <h6 class="card-title">Hubungi Kami</h6>
                                <hr>
                                <a href="#" class="btn btn-success">
                                    <p class="card-text" style="font-size:14px ;">+62 274 6466541</p>
                                </a>
                                <p style="font-size: 12px ; margin-top: 10px;">Dapatkan diskon khusus untuk reseller</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="card mt-3 text-center" style="">
                            <div class="card-body">
                                <h6 class="card-title">Temukan Kami</h6>
                                <hr>
                                <a href=""><img src="<?= base_url() ?>/assets/img/tokopedia.jpg" class="mt-2" width="120px;" alt="Link tokopedia"></a>
                                <a href=""><img src="<?= base_url() ?>/assets/img/shopee.jpg" class="mt-2" width="120px;" alt="Link shopee"></a>
                                <a href=""><img src="<?= base_url() ?>/assets/img/bukalapak.jpg" class="mt-2" width="120px;" alt="Link bukalapak"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="card mt-3 text-center" style="">
                            <div class="card-body">
                                <h6 class="card-title">Pembayaran</h6>
                                <hr>
                                <a href=""><img src="<?= base_url() ?>/assets/img/bca.png" class="mt-2" width="120px;" alt="Link BCA"></a>
                                <a href=""><img src="<?= base_url() ?>/assets/img/bri.png" class="mt-5" width="120px;" alt="Link BRI"></a>
                                <a href=""><img src="<?= base_url() ?>/assets/img/mandiri.png" class="mt-5 mb-2" width="120px;" alt="Link Mandiri"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="card mt-3 text-center" style="">
                            <div class="card-body">
                                <h5 class="card-title">Jam Layanan</h5>
                                <hr>
                                <h6>Senin - Sabtu</h6>
                                <p style="font-size: 12px;">08.00 WIB - 16.00 WIB</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


            <div class="col-md-8 bg-light">
                <h5 class="mt-2">Detail Buku</h5>
                <div class="card mb-3" style="max-width: px;">
                    <div class="row g-0">
                        <div class="col-md-5">
                            <a href=""><img id="cover" class="card-img-top w-100 p-1 text-center" src="" alt="Card image cap"></a>
                        </div>
                        <div class="col-md-7">
                            <div class="card-body">
                                <h5 class="card-title" id="judul"></h5>
                                <table class="table table-hover">
                                    <tr>
                                        <td>Penulis </td>
                                        <td id="penulis"></td>
                                    </tr>
                                    <tr>
                                        <td>Tahun Terbit </td>
                                        <td id="tahun_terbit"></td>
                                    </tr>
                                    <tr>
                                        <td>ISBN </td>
                                        <td id="isbn"></td>
                                    </tr>
                                    <tr>
                                        <td>Edisi </td>
                                        <td id="edisi"></td>
                                    </tr>
                                    <tr>
                                        <td>Halaman </td>
                                        <td id="halaman"></td>
                                    </tr>
                                    <tr>
                                        <td>Ukuran </td>
                                        <td id="ukuran"></td>
                                    </tr>
                                    <tr>
                                        <td>Bahan </td>
                                        <td id="bahan"></td>
                                    </tr>
                                    <tr>
                                        <td>Harga </td>
                                        <td id="harga"></td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>


            </div>
            <div class="col-md-2">
                <h6>Rekomendasi</h6>
                <div id="buku_rekomendasi">

                </div>
            </div>
        </div>
    </div>
    <!-- End konten -->
    <div class="container">
        <!-- Footer -->
        <footer class="text-center text-lg-start bg-light text-muted mt-5">

            <!-- Section: Links  -->


            <!-- Copyright -->
            <div class="text-center p-4" style="background-color: #00478F; color: white;">
                © 2022 Copyright:
                <a class="text-reset fw-bold" href="https://mdbootstrap.com/" style="text-decoration: none;">IDea Press Yogyakarta</a>
            </div>
            <!-- Copyright -->
        </footer>
        <!-- Footer -->
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>

<script>
    buku()

    function buku() {
        $.ajax({
            url: "<?= base_url('api/buku/view_judul') ?>" + "/" + new URL(window.location.href).pathname.split('/').filter(Boolean).pop(),
            method: "GET",
            data: {
            },
            dataType: "json",
            async: true,
            success: function(data) {
                $("#cover").attr("src", "<?= base_url('assets/img') ?>/" + data[0]['cover']);
                $('#penulis').html(data[0]['penulis']);
                $('#tahun_terbit').html(data[0]['tahun_terbit']);
                $('#isbn').html(data[0]['isbn']);
                $('#edisi').html(data[0]['edisi']);
                $('#halaman').html(data[0]['halaman']);
                $('#ukuran').html(data[0]['ukuran']);
                $('#bahan').html(data[0]['bahan']);
                $('#harga').html(data[0]['harga']);
            },
        });

        console.log(new URL(window.location.href).pathname.split('/').filter(Boolean).pop());
    }

    buku_rekomendasi();

    function buku_rekomendasi() {
        $.ajax({
            url: "<?= base_url('api/buku/view') ?>",
            method: "GET",
            data: {
                rekomendasi: "nggih",
            },
            dataType: "json",
            async: true,
            success: function(data) {
                for (var x in data) {
                    $("#buku_rekomendasi").append(
                        '<div class="card mt-1 ml-1" style="width: 9rem;">' +
                        '<a href="<?= base_url('/buku') ?>/' + data[x]['judul'].replaceAll(' ', '-').toLowerCase() + '"><img class="card-img-top w-100 p-1 text-center" src="<?= base_url('assets/img') ?>/' + data[x]['cover'] + '" alt="Card image cap" style="height: 200px;"></a>' +
                        '<div class="card-body text-center">' +
                        '<p class="card-title font-weight-bold" style="display: -webkit-box; -webkit-box-orient: vertical; -webkit-line-clamp: 2; overflow: hidden; font-size: 13px">' + data[x]['judul'] + '</p>' +
                        '</div>' +
                        '</div>'
                    );
                }
            },
        });
    }
</script>