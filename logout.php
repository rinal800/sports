<?php
session_start();
//echo"email id:".$_SESSION['email'];
unset($_SESSION['email']);




session_destroy();
echo"<script>location.href='index.php';</script>";
?>
