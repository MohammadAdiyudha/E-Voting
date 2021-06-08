<?php 
    include 'koneksi.php';

    $hasilseluruh = $koneksi->query("SELECT COUNT(*) FROM datapemilih");
    $hasilsuthanos = $koneksi->query("SELECT COUNT(*) FROM datapemilih WHERE pilihan='Suthanos'");
    
?>
<html>
<head>
    <title>Hasil E-Voting</title>
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/custom_style.css">
    <link rel="icon" href="images/icon.png" type="image/x-icon">
</head>
<body>
    <!-- Navbar -->
    <nav class="py-2 navbar navbar-expand-lg">
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
                        <a class="nav-link" href="index.php">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="voting.php">Voting</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="hasil.php">Hasil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="admin/admin-login.php">Admin</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END Navbar -->


    <!-- Hasil Section -->
    <section id="hasil_section">
        <div class="container">
            <h2>Hasil Pemilihan Saat Ini</h2>
            <p><small>Pantau jumlah voting yang masuk secara Realtime</small></p>
            <div class="prog">
                <div class="progress mb-3">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">Suthanos</div>
                </div>
                <div class="progress mb-3">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">Tony Sutorak</div>
                </div>
                <div class="progress mb-3">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">Hulak</div>
                </div>
            </div>
        </div>
    </section>

    <!-- END Form Section -->

    <!-- Profile Developer -->
    <div class="text-center p-3 footer-bawah fixed-bottom">
        <h5>Developed by</h5>
        <p><small> Mohammad Adiyudha Wisnu Wardana - Satria Galang Saputra - Yustika Rahma </small> </p>
    </div>
    <!-- END Profile Developer -->
    
    <!-- Javascript -->
    <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
</body>
</html>