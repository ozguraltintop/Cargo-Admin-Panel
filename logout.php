<?php 
session_start();

unset($_SESSION["ID"]);
unset($_SESSION["user"]);
unset($_SESSION["pass"]);
unset($_SESSION["ad"]);
unset($_SESSION["soyad"]);
unset($_SESSION["sirket"]);
unset($_SESSION["deger"]);
session_destroy();
header("Location:index.php")
?>