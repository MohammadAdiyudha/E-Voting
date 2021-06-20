<?php

include '../koneksi.php';

$koneksi->query("DELETE FROM datapemilih WHERE id ='$_GET[id]'");

echo "<div class='alert alert-info'>Hapus DPT Berhasil</div>";
header("location:dataPemilih.php"); 

?>