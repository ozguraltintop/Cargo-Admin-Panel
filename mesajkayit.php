<?php 
session_start();
if($_POST)
{
$mesajim=$_POST["mesajgonder"];
$kimdenv=$_SESSION["SIRKET"];
$db=new PDO('mysql:host=localhost;dbname=yapilacaklar_db','root','');
$query=$db->prepare("INSERT INTO mesajlar set kimden=?,mesajim=?");
$EKLE=$query->execute(array($kimdenv,$mesajim));
header("Location:admin.php");
}
?>

