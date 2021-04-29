<?php
session_destroy();
echo"<script>alert('Anda telah logout')</script>";
echo"<script>location='admin-login.php';</script>";
?>