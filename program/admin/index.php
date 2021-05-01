<?php
    session_start();
    // Jika belum login, ditendang ke page login
    if ( !isset ($_SESSION["loginadmin"])) {
        header("Location: ../admin/admin-login.php");
        exit;
    }

?>

<html>
<head>
    <title>E-Voting</title>
   <link rel="stylesheet" href="../../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/custom_style.css">
</head>
<body>
    <!-- Navbar -->
    <nav class="py-2 navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                Admin E-Voting
            </a>
            <button class="navbar-toggler navbar-dark" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto ">
                    <li class="nav-item">
                        <a class="nav-link active" href="../admin/index.php">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../admin/tambahData.php">Tambah DPT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../admin/dataPemilih.php">Data Pemilih</a>
                    </li>
                     <li class="nav-item">
                        <a class="nav-link" href="../admin/dataVote.php">Data Vote</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../admin/logout.php">Logout</a>
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
                    <h2>Selamat Datang Admin</h2>
                </div>
                <div class="col-5 img-col" id="ilustrasi">
                    <img src="../images/voting-logo.png" alt="Hero Image" class="float-end">
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
                <div class="card-header">
                    <h5 class="card-title">Online</h5>
                    <p class="card-text">Voting bisa dilakukan dimana saja dan kapan saja karena dilakukan secara online</p>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Pantau Realtime</h5>
                    <p class="card-text">Hasil Voting semua pemilih langsung bisa dipantau pada menu hasil</p>
                </div>
                </div>
            </div>
             <div class="col">
                <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Ayo Sukseskan Pilkades</h5>
                    <p class="card-text">golput? golput? golput? enggaklah mending voting aja &#x1F602;</p>
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
