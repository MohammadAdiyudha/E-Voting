<?php
session_start();
session_unset();
session_destroy();


echo"<script>alert('Anda telah logout')</script>";
echo"<script>location='admin-login.php';</script>";
?>