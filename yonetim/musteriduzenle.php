<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<head>
    <script type="text/javascript" src="jquery-1.3.2.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="/java.js"></script>
    <link href="stylex.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" rel="stylesheet">
    <link rel="stylesheet" href="admindash.css"> 
    <script src="leftbar.js" type="text/javascript"></script>
    <script>
    
    </script>
</head>   


<body>
<?php
if(!isset($_SESSION["ID"]))
{
echo "Giris " ;
}
else
{
    
}

?>
    <aside class="side-nav" id="show-side-navigation1">
    <i class="fa fa-bars close-aside hidden-sm hidden-md hidden-lg" data-close="show-side-navigation1"></i>
    <div class="heading">
        <img src="logo.png" alt="">
        <div class="info">
        <h3><a href="#">
         <?php echo $_SESSION["MAIL"]; ?></a></h3>
        <p style="color:red">ADMIN <a href="bayilik/bayilik.php"></a></p>
        </div>
    </div>
    <div class="search">
        <input type="text" placeholder="Buraya"><i class="fa fa-search"></i>
    </div>
    <ul class="categories">
        <li><i class="fa fa-home fa-fw" aria-hidden="true"></i><a href="admin.php"> Profil</a>
     
        </li>
        
        <li><i class="fa fa-envelope-open-o fa-fw"></i><a href="#"> Müşteriler <span class="num prim">Bayi Gelen</span></a>
        <ul class="side-nav-dropdown">
            <li><a href="musterikayit.php">Müşteri Kayıt</a></li>
            <li><a href="musteriliste.php">Müşteri Listesi</a></li>
           
        </ul>
        </li>
        
        <li><i class="fa fa-envelope-open-o fa-fw"></i><a href="#"> Mesajlar <span class="num prim"></span></a>
        <ul class="side-nav-dropdown">
            <li><a href="kuryetalepleri.php">Kurye Talepleri</a></li>
            <li><a href="mesajtalepleri.php">Gelen Kutusu</a></li>
        </ul>
        </li>
        <li><i class="fa fa-comments-o fa-fw"></i><a href="kayit.php" > Kayıt Ekle</a></li>
        <li><i class="fa fa-comments-o fa-fw"></i><a href="kayitlistesi.php" > Kayıt Listesi</a></li>
        <li><i class="fa fa-comments-o fa-fw"></i><a href="bayilik/bayilikliste.php" style="color:green"> Bayilik İstek</a></li>
        <li><i class="fa fa-comments-o fa-fw"></i><a href="logout.php" style="color:red"> Çıkış</a></li>
    </ul>
    </aside>
    <section id="contents">
    <nav class="navbar navbar-default">
        <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <i class="fa fa-align-right"></i>
            </button>
           
        </div>
        <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
         
        </div>
        </div>
    </nav>
    <div class="welcome">
        <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
            <div class="content">
                <h2 style="color:red">Turkey Cargo Yönetici Paneli</h2>
                <p style="color:red">ADMIN</p>
            </div>
            </div>
        </div>
        </div>
    </div>
 
    <section class="charts">
        <div class="container-fluid">
        
        </div>
    </section>
    <section class="admins">
        <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
            <div class="box">
               
               
            </div>
            </div>
            <div class="col-md-6">
            <div class="box">
               
             
               
            </div>
            </div>
        </div>
        </section>
        <section class='statis text-center'>
    

  
<?php 

if($_POST)
{
$yeni_gorev1=$_POST["madi"];
$yeni_gorev2=$_POST["msoyadi"];
$yeni_gorev3=$_POST["nereye"];
$yeni_gorev4=$_POST["neverdi"];
$yeni_gorev5=$_POST["para"];
$yeni_gorev6=$_POST["takipno"];
$yeni_gorev7=$_POST["marka"];
$yeni_gorev8=$_POST["tur"];
$yeni_gorev9=$_POST["tarih"];
$yeni_gorev10=$_POST["firma"];
$yeni_gorev11=$_POST["gercektakipno"];

$guncel=$_POST["hdnid"];
$db=new PDO('mysql:host=localhost;dbname=yapilacaklar_db','root','');
$query=$db->prepare("update musteri set madi=?,msoyadi=?,nereye=?,neverdi=?,para=?,takipno=?,marka=?,tur=?,tarih=?,firma=?,gercektakipno=? where id=?" );
$update=$query->execute(array($yeni_gorev1,$yeni_gorev2,$yeni_gorev3,$yeni_gorev4,$yeni_gorev5,$yeni_gorev6,$yeni_gorev7,$yeni_gorev8,$yeni_gorev9,$yeni_gorev10,$yeni_gorev11,$guncel));

echo '<script> location.replace("musteriliste.php"); </script>';
}

if($_GET)
{
    $id=$_GET["id"];  
    $db=new PDO('mysql:host=localhost;dbname=yapilacaklar_db','root','');
    $query=$db->query("select * from musteri where id='{$id}'")->fetch(PDO::FETCH_ASSOC);

    if($query)
    {
        $user11=$query["madi"];
        $user21=$query["msoyadi"];
        $user31=$query["nereye"];
        $user41=$query["neverdi"];
        $user51=$query["para"];
        $user61=$query["takipno"];
        $user71=$query["marka"];
        $user81=$query["tur"];
        $user91=$query["tarih"];
        $user101=$query["firma"];
        $user111=$query["gercektakipno"];
        
    }

}
?>

<hr/>

<form action="musteriduzenle.php" method="POST">
<input type="hidden" name="hdnid" value="<?php echo $id?>"><br>
Adi : <input type="text" name="madi" value="<?php echo $user11?>"><br>
Soyadi :<input type="text" name="msoyadi" value="<?php echo $user21?>"><br>
Nereye : <input type="text" name="nereye" value="<?php echo $user31?>"><br>
Eşya : <input type="text" name="neverdi" value="<?php echo $user41?>"><br>
Para : <input type="text" name="para" value="<?php echo $user51?>"><br>
TakipNo : <input type="text" name="takipno" value="<?php echo $user61?>"><br>
Marka : <input type="text" name="marka" value="<?php echo $user71?>"><br>
Birim : <input type="text" name="tur" value="<?php echo $user81?>"><br>
Tarih : <input type="text" name="tarih" value="<?php echo $user91?>"><br>
Firma : <input type="text" name="firma" value="<?php echo $user101?>"><br>
Gercek Takip Numarasi : <input type="text" name="gercektakipno" value="<?php echo $user111?>"><br>


<input type="submit" value="Kaydet">

</form>





        </section>
        <section class="chrt3">
        <div class="container-fluid">
            <div class="row">
            <
           





            </div>
        </div>
        </section>
    </section>

</body>

</html>
