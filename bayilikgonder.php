<?php 
if($_POST)
{
$useryx=$_POST["isminiz"];
$passyx=$_POST["mailiniz"];
$adyx=$_POST["numaraniz"];
$soyadyx=$_POST["siteniz"];
$degeryx=$_POST["sirketiniz"];
$db=new PDO('mysql:host=localhost;dbname=yapilacaklar_db','root','');
$query=$db->prepare("INSERT INTO bayilik set isminiz=?,mailiniz=?,numaraniz=?,siteniz=?,sirketiniz=?");
$EKLE=$query->execute(array($useryx,$passyx,$adyx,$soyadyx,$degeryx));
header("Location: index.php");
}

?>