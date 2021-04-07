<?php 
if($_POST)
{
$usery=$_POST["user"];
$passy=$_POST["pass"];
$ady=$_POST["ad"];
$soyady=$_POST["soyad"];
$degery=$_POST["deger"];
$sirkety=$_POST["sirket"];
$db=new PDO('mysql:host=localhost;dbname=yapilacaklar_db','root','');
$query=$db->prepare("INSERT INTO kullanici set user=?,pass=?,ad=?,soyad=?,deger=?,sirket=?");
$EKLE=$query->execute(array($usery,$passy,$ady,$soyady,$degery,$sirkety));
header("Location:kayitlistesi.php");
}

?>