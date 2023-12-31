<?php 
    include 'koneksi.php';

?>
<html>
<head>
    <title>Vote Pilihanmu</title>
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/custom_style.css">
    <link rel="icon" href="images/icon.png" type="image/x-icon">
    <script src="../node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
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
                        <a class="nav-link active" aria-current="page" href="voting.php">Voting</a>
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


    <!-- Form Section -->
    <section id="formulir">
        <div class="container">
            <h2>Form Pemilihan</h2>
            <p><small>Pastikan Nama dan NIKmu valid sesuai KTP</small></p>

            <form action="" method="post" enctype="multipart/form-data">
                <div class="mb-4">
                    <label for="namalengkap" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" id="namalengkap" aria-describedby="emailHelp" name="nama" placeholder="Masukkan Nama" required>
                </div>
                <div class="mb-4">
                    <label for="nik" class="form-label">NIK</label>
                    <input type="text" class="form-control" id="nik" name="nik" placeholder="Masukkan NIK" required>
                </div>

                   <h3 align="center"> Kepala Desa Empire 2021 </h3><br>
                <div class="row mb-4">
                    <div class="form-check col-2">
                        <h3 align="center"> 01 </h3>
                        <img src="images/thanosnos.jpg" alt="thanos" class="img-thumbnail">
                        <input class="form-check-input" type="checkbox" id="pilihan1" value="Suthanos" name="rb">
                        <h6 align="center"><label class="form-check-label" for="pilihan1">Suthanos</label></h6>
                    </div>
                    <div class="form-check col-2">
                        <h3 align="center"> 02 </h3>
                        <img src="images/ironman_tony.jpg" alt="tony sutorak" class="img-thumbnail">
                        <input class="form-check-input" type="checkbox" id="pilihan2" value="Tony Sutorak" name="rb">
                        <h6 align="center"><label class="form-check-label" for="pilihan2">Tony Sutorak</label></h6>
                    </div>
                    <div class="form-check col-2">
                        <h3 align="center"> 03 </h3>
                        <img src="images/hulk.jpg" alt="hulak" class="img-thumbnail">
                        <input class="form-check-input" type="checkbox" id="pilihan3" value="Hulak" name="rb">
                        <h6 align="center"><label class="form-check-label" for="pilihan3">Hulak</label></h6>
                    </div>
                </div>
                <div class="mb-4">
                <button type="submit" name="submit" class="btn btn-primary" value="submit">Submit</button>
                </div>
            </form>

            <?php
                        if ( isset ( $_POST["submit"] ) ) {
                        $koneksi->query("UPDATE datapemilih 
                                        SET pilihan='$_POST[rb]', waktupilih=now() 
                                        WHERE nama='$_POST[nama]' AND nik='$_POST[nik]' AND pilihan=''");
                       
                        if ($koneksi->affected_rows == 0) {
                            echo"<script> Swal.fire('Vote Gagal','Data Anda Tidak Terdaftar atau Anda Sudah Melakukan Vote. Call Center: 082221111 (Panitia)', 'error');</script>";
                        } else {
                            echo"<script> Swal.fire('Vote Berhasil','Silahkan Pantau Hasil Pemilihan', 'success');</script>";
                        }
                    }
            ?>
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