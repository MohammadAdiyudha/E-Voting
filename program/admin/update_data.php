<?php
include '../koneksi.php';


// Jika belum login, ditendang ke page login
if ( !isset ($_SESSION["loginadmin"])) {
    header("Location: ../admin/admin-login.php");
    exit;
}


$ambil = $koneksi->query("SELECT *FROM datapemilih WHERE id='$_GET[id]'");
$data = $ambil->fetch_assoc();

?>

<html>
<head>
   
    <title>Tambah Data</title>
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
    <br>
    <br>

    <!-- Hero Section -->
     <section id="form-login">
        <div class="container">
            <h2>Update Data Pemilih</h2>
            <p><small>Pastikan Nama dan NIK yang di isi sesuai</small></p>
            <form role="form" method="post">
                <div class="mb-4">
                    <label for="nama" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" name="namaLengkap" value="<?php echo $data['nama'] ?>">
                </div>
                <div class="mb-4">
                    <label for="nik" class="form-label">NIK</label>
                    <input type="text" class="form-control" name="nik" value="<?php echo $data['nik'] ?>">
                </div>
                <div class="mb-4">
                    <button type="submit" class="btn btn-primary" name="update" value="update">Update</button>
                </div>
            </form>

            <?php
            if (isset($_POST['update']))
            {
            $koneksi->query("UPDATE datapemilih SET nama='$_POST[namaLengkap]', nik='$_POST[nik]' WHERE id='$_GET[id]'");

                if ($koneksi->error) {
                    echo "<div class='alert alert-danger'>Update DPT GAGAL</div>";
                } else {
                    echo "<div class='alert alert-info'>Update DPT Berhasil</div>";
                    echo "<meta http-equiv='refresh' content='1;url='../admin/dataPemilih.php'>";
                }
            }
            ?>

        </div>
    </section>
    <!-- END Hero Section -->
<br>
<br>
<br>
<br>
    <!-- Profile Developer -->
    <div class="text-center p-3 footer-bawah">
        <h5>Developed by</h5>
        <p><small> Mohammad Adiyudha Wisnu Wardana - Satria Galang Saputra - Yustika Rahma </small> </p>
    </div>
    <!-- END Profile Developer -->
    
    <!-- Javascript -->
    <script src="../../node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
</body>
</html>
