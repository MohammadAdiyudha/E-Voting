<?php
include 'koneksi.php';

// Jika belum login, ditendang ke page login
if ( !isset ($_SESSION["loginadmin"])) {
    header("Location: ../admin/admin-login.php");
    exit;
}
?>

<html>
<head>
   
    <title>Data Pemilih</title>
   <link rel="stylesheet" href="../../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/custom_style.css">
    <link rel="icon" href="../images/icon.png" type="image/x-icon">
</head>
<body>
    <!-- Navbar -->
    <nav class="py-2 navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
            <img src="../images/icon.png" alt="logo" class="logo pb-1">
                Admin E-Voting
            </a>
            <button class="navbar-toggler navbar-dark" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto ">
                    <li class="nav-item">
                        <a class="nav-link" href="../admin/index.php">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../admin/tambahData.php">Tambah DPT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../admin/dataPemilih.php">Data Pemilih</a>
                    </li>
                     <li class="nav-item">
                        <a class="nav-link active" href="../admin/dataVote.php">Data Vote</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../admin/logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END Navbar -->
    <br>
    <br>

    <!-- Hero Section -->
     <section>
        <div class="container">
            <h2>Data Vote</h2>
            <table class="table table-bordered table-striped table-hover">
               <thead bgcolor="#413c69" style="color: white">
                   <tr>
                    <th>No</th>
                    <th>NIK</th>
                    <th>Pilihan</th>
                    <th>Waktu Pilih</th>

                   </tr>
               </thead>
               <tbody>
                <!-- Data Dummy -->
                <tr>
                    <td>1.</td>
                    <td>123456</td>
                    <td>Suthanos</td>
                    <td>2/2/2021</td>
                </tr>
                <tr>
                    <td>2.</td>
                    <td>1234567</td>
                    <td>Suthanos</td>
                    <td>2/2/2021</td>
                </tr>
                <tr>
                    <td>1.</td>
                    <td>123456</td>
                    <td>Suthanos</td>
                    <td>2/2/2021</td>
                </tr>
                <tr>
                    <td>1.</td>
                    <td>123456</td>
                    <td>Suthanos</td>
                    <td>2/2/2021</td>
                </tr>
                <tr>
                    <td>1.</td>
                    <td>123456</td>
                    <td>Suthanos</td>
                    <td>2/2/2021</td>
                </tr>
               </tbody>
           </table>
            
        </div>
    </section>
    
    <!-- END Hero Section -->

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
