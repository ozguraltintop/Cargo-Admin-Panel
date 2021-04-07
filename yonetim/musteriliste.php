<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
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
    <style>
            table.customTable {
            width: 100%;
            background-color: #FFFFFF;
            border-collapse: collapse;
            border-width: 2px;
            border-color: #000000;
            border-style: solid;
            color: #000000;
            }

            table.customTable td, table.customTable th {
            border-width: 2px;
            border-color: #000000;
            border-style: solid;
            padding: 9px;
            }

            table.customTable thead {
            background-color: #7C23A6;
            }
</style>
</head>   


<body>
<?php

if ($_SESSION["MAIL"]=="")
{
 header("Location:logout.php");
}
?>
    <aside class="side-nav" id="show-side-navigation1">
    <i class="fa fa-bars close-aside hidden-sm hidden-md hidden-lg" data-close="show-side-navigation1"></i>
    <div class="heading">
        <img src="logo.png" alt="">
        <div class="info">
        <h3><a href="#">
         <?php 
         echo $_SESSION["MAIL"];
         ?>
        
        </a></h3>
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
    <a href="searching.php">Detaylı Arama</a>

        <?php 
    $db =new PDO('mysql:host=localhost;dbname=yapilacaklar_db','root','');
    $toplamVeri = $db->query("SELECT COUNT(*) FROM musteri")->fetchColumn();

    $goster = 10;

    $toplamSayfa = ceil($toplamVeri / $goster);

    $sayfa = $_GET["s"];

    if($sayfa < 1) $sayfa = 1; 

    if($sayfa > $toplamSayfa)

    {

        $sayfa = (int)$toplamSayfa;

    }

    $limit = ($sayfa - 1) * $goster;

 
    $db =new PDO('mysql:host=localhost;dbname=yapilacaklar_db','root','');
    $musteriler = $db->prepare("SELECT * FROM musteri LIMIT :basla, :bitir");

    $musteriler->bindValue(":basla",$limit,PDO::PARAM_INT);

    $musteriler->bindValue(":bitir",$goster,PDO::PARAM_INT);

    $musteriler->execute();

    $mu = $musteriler->fetchAll(PDO::FETCH_OBJ);

    foreach ($mu as $item) {

        ?>




<!-- HTML Code: Place this code in the document's body (between the <body> tags) where the table should appear -->
<table class="customTable">
  <thead>
    <tr>
      <th>Tarih</th>
      <th>Adı</th>
      <th>Soyadi</th>
      <th>Adres</th>
      <th>Esya</th>
      <th>Para</th>
      <th>Tur</th>
      <th>Marka</th>
      <th>Firma</th>
      <th>TurkeyCargo Takip</th>
      <th>Gercek Takip</th>
      <th>SIL</th>
      <th>EDIT</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><?php echo $item->tarih;?></td>
      <td><?php echo $item->madi;?></td>
      <td><?php echo $item->msoyadi;?></td>
      <td><?php echo $item->nereye;?></td>
      <td><?php echo $item->neverdi;?></td>
      <td><?php echo $item->para;?></td>
      <td><?php echo $item->tur;?></td>
      <td><?php echo $item->marka;?></td>
      <td><?php echo $item->firma;?></td>
      <td><?php echo $item->takipno;?></td>
      <td><?php echo $item->gercektakipno;?></td>
      <td><?php echo "<a href='musterisil.php?id=".$item->id."'>Sil</a>";?></td>
      <td><?php echo "<a href='musteriduzenle.php?id=".$item->id."'>Duzenle</a>";?><br></td>
    </tr>
    
  </tbody>
</table>
        <hr>

        <?php

    }
    ?>

     

    <ul class="sayfalama">

        <?php 

        for($i = 1; $i<=$toplamSayfa;$i++)

        {

            ?>

            <li style="display:inline"><a style="display:inline" href="musteriliste.php?s=<?php echo $i;?>"><?php echo $i;?></a></li>

            <?php

        }

        ?>

 

    </ul>




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