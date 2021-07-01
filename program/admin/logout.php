<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/custom_style.css">
    <script src="../../node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
	<script src="../../node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
	<title></title>
</head>
<body>


<?php
session_start();
session_unset();
session_destroy();


 echo '<script> Swal.fire({
                                      position: "center",
                                      icon: "info",
                                      title: "Anda Telah Logout",
                                      showConfirmButton: false,
                                      timer: 5000
                                    });</script>';
                            echo "<meta http-equiv='refresh' content='1;url=../admin/admin-login.php'>";
?>

</body>
</html>