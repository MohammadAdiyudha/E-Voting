<?php
include 'koneksi.php';

// Cek sudah login apa belum
if (isset($_SESSION["loginadmin"])) {
    // Jika sudah login tidak bisa login lagi
    header("Location: index.php");
    exit;
}
?>

<html>
<head>
    <title>Admin Login</title>
    <link rel="stylesheet" href="../../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/custom_style.css">
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
                        <a class="nav-link" href="../index.php">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../voting.php">Voting</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../hasil.php">Hasil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../admin/admin-login.php">Admin</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END Navbar -->


    <!-- Form Section -->
    <section id="form-login">
        <div class="container">
            <h2 class="text-center">Admin Login</h2>
            <form role="form" method="post">
                <div class="mb-4">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" name="username">
                </div>
                <div class="mb-4">
                    <label for="pass" class="form-label">Password</label>
                    <input type="password" class="form-control" name="pass">
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" name="checkbox">
                    <label class="form-check-label" for="checkbox">Remember Me</label>
                </div>
                <div class="mb-4 text-center">
                    <button type="submit" class="btn btn-primary" name="login" value="login">Login</button>
                </div>
            </form>

             <?php
                if(isset($_POST['login']))
                 {
                    $ambil = $koneksi->query("SELECT *FROM loginadmin WHERE username ='$_POST[username]'
                        AND password='$_POST[pass]'");
                    $yangcocok=$ambil->num_rows;
                    if ($yangcocok==1)
                         {
                            $_SESSION['loginadmin'] =$ambil->fetch_assoc();
                            echo"<div class ='alert alert-success'>login sukses</div>"; 
                            echo "<meta http-equiv='refresh' content='1;url=../admin/index.php'>";
                         }
                        else
                        {
                            echo"<div class ='alert alert-danger'>login gagal</div>";
                            echo "<meta http-equiv='refresh' content='1;url=../admin/admin-login.php'>";
                          }
                        }
                    ?>
        </div>
    </section>

    <!-- END Form Section -->

    
    <!-- Javascript -->
    <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
</body>
</html>