<?php 

?>
<html>
<head>
    <title>E-Voting</title>
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/custom_style.css">
    <link rel="icon" href="images/icon.png" type="image/x-icon">
</head>
<body>
    <!-- Navbar -->
    <nav class="py-2 navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="images/icon.png" alt="logo" class="logo pb-1">
                E-Voting
            </a>
            <button class="navbar-toggler navbar-dark" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto ">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="voting.php">Voting</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="hasil.php">Hasil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="admin/admin-login.php">Admin</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END Navbar -->

    <!-- Hero Section -->
    <section id="hero">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2>Berikan Suaramu Sekarang Demi Kemajuan Bangsa dan Negara</h2>
                    <button type="button" class="btn btn-light" onclick="location.href='voting.php'" ><strong>Vote Sekarang</strong></button>
                </div>
                <div class="col-5 img-col" id="ilustrasi">
                    <img src="images/voting-logo.png" alt="Hero Image" class="float-end">
                </div>
            </div>
        </div>
    </section>
    <!-- END Hero Section -->

    <!-- Kades Section -->
    <section id="kades">
        <div class="container">
            <div class="deskripsi text-center">
                <h2>Apa itu E-Voting?</h2>
                <p>E-Voting adalah sebuah web sarana pemungutan suara dalam 
                    rangkaian <br> proses pemilu yang dilakukan secara online.</p>
            </div>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card">
                <img src="images/thanosnos.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Suthanos</h5>
                    <p class="card-text">Calon yang berasal dari RT 03 RW 09 ini memiliki hobi menanam terong.
                    Sehingga warna kulitnya sendiri dicat sewarna dengan terong.</p>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                <img src="images/ironman_tony.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Tony Sutorak</h5>
                    <p class="card-text">Selain memiliki predikat S3 Teknik Mesin Robot,
                    dia juga seringkali membantu masyarakat melakukan service elektronik secara gratis dan juga sering mengadakan giveaway obeng.</p>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                <img src="images/hulk.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Hulak</h5>
                    <p class="card-text">Seorang yang memiliki rumah di pinggiran desa.
                    Hal ini dikarenakan sawah yang dimilikinya sangat luas. Dia adalah seorang Vegan sehingga warna kulitnya menjadi hijau</p>
                </div>
                </div>
            </div>
            </div>

        </div>
    </section>

    <!-- END Kades Section -->

    <!-- Profile Developer -->
    <div class="text-center p-3 footer-bawah">
        <h5>Developed by</h5>
        <p><small> Mohammad Adiyudha Wisnu Wardana - Satria Galang Saputra - Yustika Rahma </small> </p>
    </div>
    <!-- END Profile Developer -->
    
    <!-- Javascript -->
    <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
</body>
</html>