<?php 
if($_GET)
{

  $id=$_GET["id"];  
  $db=new PDO('mysql:host=localhost;dbname=yapilacaklar_db','root','');
  $query=$db->prepare("delete from musteri where id=?");
  $sonuc=$query->execute(array($id));
  header("Location: musteriliste.php");

}

?>