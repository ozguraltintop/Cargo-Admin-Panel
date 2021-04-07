<?php 
if($_POST)
{
$madiy=$_POST["madi"];
$msoyadiy=$_POST["msoyadi"];
$nereyey=$_POST["nereye"];
$neverdiy=$_POST["neverdi"];
$paray=$_POST["para"];
$takipnoy=$_POST["takipno"];
$markay=$_POST["marka"];
$tury=$_POST["tur"];
$tarihy=$_POST["tarih"];
$firmay=$_POST["firma"];
$gercektakipnoy=$_POST["gercektakipno"];
$db=new PDO('mysql:host=localhost;dbname=yapilacaklar_db','root','');
$query=$db->prepare("INSERT INTO musteri set madi=?,msoyadi=?,nereye=?,neverdi=?,para=?,takipno=?,marka=?,tur=?,tarih=?,firma=?,gercektakipno=?");
$EKLE=$query->execute(array($madiy,$msoyadiy,$nereyey,$neverdiy,$paray,$takipnoy,$markay,$tury,$tarihy,$firmay,$gercektakipnoy));
header("Location:musteriliste.php");
}

?>