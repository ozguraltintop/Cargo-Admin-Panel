<?php
error_reporting(0);
session_start();

$servername="localhost";
$username="root";
$password="";
$dbname="yapilacaklar_db";

$conn=new mysqli($servername,$username,$password,$dbname);
$new = mysqli_set_charset($conn,"utf8");

if($conn->connect_error)
{
die("Connection False" . $conn->connect_error);

}

if($_POST)
{
 $nickname=$_POST["Email"];
 $sifre=$_POST["Sifre"];

$giris="select * from kullanici where user='$nickname' and pass='$sifre'";
$getir=$conn->query($giris);
if($getir->num_rows>0)
{
while($row=$getir->fetch_assoc())
{
    $_SESSION["ID"] = $row["id"];
    $_SESSION["SIRKET"] = $row["sirket"];
    $_SESSION["AD"] = $row["ad"];
    $_SESSION["SOYAD"] = $row["soyad"];
    $_SESSION["MAIL"] = $row["user"];
    $_SESSION["DEGER"] = $row["deger"];

    header("Location:admin.php");
}

}

}

?>

