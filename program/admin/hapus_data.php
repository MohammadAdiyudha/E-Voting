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

include '../koneksi.php';



$koneksi->query("DELETE FROM datapemilih WHERE id ='$_GET[id]'");

 echo '<script> Swal.fire({
                            position: "center",
                            icon: "success",
                            title: "Hapus Berhasil",
                            showConfirmButton: false,
                            timer: 10000});
      </script>';
echo "<meta http-equiv='refresh' content='1;url=../admin/dataPemilih.php'>";

?>


</body>
</html>
