<?php 
session_start();
if($_POST)
{
$notv=$_POST["kuryenotum"];
$kimdenv=$_SESSION["SIRKET"];
$db=new PDO('mysql:host=localhost;dbname=yapilacaklar_db','root','');
$query=$db->prepare("INSERT INTO kuryenot set kimden=?,notx=?");
$EKLE=$query->execute(array($kimdenv,$notv));
header("Location:admin.php");
}
?>

