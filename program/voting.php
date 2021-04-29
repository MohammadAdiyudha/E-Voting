<?php 

?>
<html>
<head>
    <title>Vote Pilihanmu</title>
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/custom_style.css">
</head>
<body>
    <!-- Navbar -->
    <nav class="py-2 navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#">
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

            <form>
                <div class="mb-4">
                    <label for="namalengkap" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" id="namalengkap" aria-describedby="emailHelp">
                </div>
                <div class="mb-4">
                    <label for="nik" class="form-label">NIK</label>
                    <input type="text" class="form-control" id="nik">
                </div>
                <div class="row mb-4">
                    <div class="form-check col-2">
                        <img src="images/thanosnos.jpg" alt="thanos" class="img-thumbnail">
                        <input class="form-check-input" type="radio" name="pilihan1radio" id="pilihan1" value="option1">
                        <label class="form-check-label" for="pilihan1">Suthanos</label>
                    </div>
                    <div class="form-check col-2">
                        <img src="images/ironman_tony.jpg" alt="tony sutorak" class="img-thumbnail">
                        <input class="form-check-input" type="radio" name="pilihan2radio" id="pilihan2" value="option2">
                        <label class="form-check-label" for="pilihan2">Tony Sutorak</label>
                    </div>
                    <div class="form-check col-2">
                        <img src="images/hulk.jpg" alt="hulak" class="img-thumbnail">
                        <input class="form-check-input" type="radio" name="pilihan3radio" id="pilihan3" value="option3">
                        <label class="form-check-label" for="pilihan3">Hulak</label>
                    </div>
                </div>
                <div class="mb-4">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
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