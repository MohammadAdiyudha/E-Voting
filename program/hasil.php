<?php 
    include 'koneksi.php';

    // Hitung vote masuk dan konversi ke array (agar bisa dikonversi ke string dan tampil saat echo)
    $ambilseluruh = $koneksi->query("SELECT COUNT(*) AS jumlah FROM datapemilih");
    $hasilseluruh = $ambilseluruh->fetch_assoc();

    $ambilsuthanos = $koneksi->query("SELECT COUNT(*) AS jumlah FROM datapemilih WHERE pilihan='Suthanos'");
    $hasilsuthanos = $ambilsuthanos->fetch_assoc();
    $persensuthanos = ($hasilsuthanos['jumlah'] / $hasilseluruh['jumlah']) * 100;

    $ambiltony = $koneksi->query("SELECT COUNT(*) AS jumlah FROM datapemilih WHERE pilihan='Tony Sutorak'");
    $hasiltony = $ambiltony->fetch_assoc();
    $persentony = ($hasiltony['jumlah'] / $hasilseluruh['jumlah']) * 100;

    $ambilhulak = $koneksi->query("SELECT COUNT(*) AS jumlah FROM datapemilih WHERE pilihan='Hulak'");
    $hasilhulak = $ambilhulak->fetch_assoc();
    $persenhulak = ($hasilhulak['jumlah'] / $hasilseluruh['jumlah']) * 100;

    $ambilgolput = $koneksi->query("SELECT COUNT(*) AS jumlah FROM datapemilih WHERE pilihan=''");
    $hasilgolput = $ambilgolput->fetch_assoc();
    $persengolput = ($hasilgolput['jumlah'] / $hasilseluruh['jumlah']) * 100;

    
    
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
            <div class="row">
                <h2 class="col text-start">Hasil Pemilihan Saat Ini</h2>
                <h4 class="col text-end align-middle">Jumlah Pemilih = <?= $hasilseluruh['jumlah'] ?></h4>
            </div>

            <p><small>Pantau jumlah voting yang masuk secara Realtime</small></p>
            
            <div class="prog">
                <label for="progsuthanos" class=""><h5>Suthanos</h5></label>
                <div class="progress mb-3" id="progsuthanos">
                    <div class="progress-bar bg-purple"  role="progressbar" style="width: <?php echo $persensuthanos?>%; background-color: purple !important;" 
                    aria-valuenow="<?php echo $persensuthanos?>" aria-valuemin="0" aria-valuemax="100"><?php echo $hasilsuthanos['jumlah']?></div>
                </div>
                <label for="progtony" class=""><h5>Tony Sutorak</h5></label>
                <div class="progress mb-3">
                    <div class="progress-bar bg-orange" id="progtony" role="progressbar" style="width: <?php echo $persentony?>%; background-color: orange !important;" 
                    aria-valuenow="<?php echo $persentony?>" aria-valuemin="0" aria-valuemax="100"><?php echo $hasiltony['jumlah']?></div>
                </div>
                <label for="proghulak" class=""><h5>Hulak</h5></label>
                <div class="progress mb-3">
                    <div class="progress-bar bg-success" id="proghulak" role="progressbar" style="width: <?php echo $persenhulak?>%" 
                    aria-valuenow="<?php echo $persenhulak?>" aria-valuemin="0" aria-valuemax="100"><?php echo $hasilhulak['jumlah']?></div>
                </div>
                <label for="proggolput" class=""><h5>Belum Memilih</h5></label>
                <div class="progress mb-3">
                    <div class="progress-bar bg-danger" id="proggolput" role="progressbar" style="width: <?php echo $persengolput?>%" 
                    aria-valuenow="<?php echo $persengolput?>" aria-valuemin="0" aria-valuemax="100"><?php echo $hasilgolput['jumlah']?></div>
                </div>
            </div>
        </div>
    </section>

    <!-- END Form Section -->

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