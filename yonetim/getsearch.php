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
        
        <li><i class="fa fa-envelope-open-o fa-fw"></i><a href="#"> M????teriler <span class="num prim">Bayi Gelen</span></a>
        <ul class="side-nav-dropdown">
            <li><a href="musterikayit.php">M????teri Kay??t</a></li>
            <li><a href="musteriliste.php">M????teri Listesi</a></li>
           
        </ul>
        </li>
        
        <li><i class="fa fa-envelope-open-o fa-fw"></i><a href="#"> Mesajlar <span class="num prim"></span></a>
        <ul class="side-nav-dropdown">
            <li><a href="kuryetalepleri.php">Kurye Talepleri</a></li>
            <li><a href="mesajtalepleri.php">Gelen Kutusu</a></li>
        </ul>
        </li>
        <li><i class="fa fa-comments-o fa-fw"></i><a href="kayit.php" > Kay??t Ekle</a></li>
        <li><i class="fa fa-comments-o fa-fw"></i><a href="kayitlistesi.php" > Kay??t Listesi</a></li>
        <li><i class="fa fa-comments-o fa-fw"></i><a href="bayilik/bayilikliste.php" style="color:green"> Bayilik ??stek</a></li>
        <li><i class="fa fa-comments-o fa-fw"></i><a href="logout.php" style="color:red"> ????k????</a></li>
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
                <h2 style="color:red">Turkey Cargo Y??netici Paneli</h2>
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
    $searched=$_POST['searchingx'];
    try{//hata varm?? diye kontrol mekanizmas??.

    $baglanti=new PDO("mysql:host=localhost;dbname=yapilacaklar_db","root","");//ba??lant?? yapt??k

    echo "Basarili. <br />";//ba??lant?? varsa ekrana yaz.

    

    $ara=$baglanti->query("select * from musteri where tarih like '%$searched%' ");//isim s??tununda a harfi ge??enleri ??ektik.

    $miktar=$ara->rowCount();//verilerin hepsini sayd??rd??k.

    

    if($ara){//e??er veri ??ekildiyse

        echo "Veri ??ekildi <br />";

        if($miktar>0){

            foreach($ara as $al){//foreach $arada ki t??m verileri tek tek $al de??i??kenine aktaracak
                    echo $al["tarih"]."----";
                    echo $al["madi"]."----";//Ald??????m??z verilerden isim s??tununu ekrana bast??rd??k
                    echo $al["msoyadi"]."----";
                    echo $al["para"]."<br />";
                }

        }else{

            echo "Aranan kelime yok.";

        }

    }else{

        echo "veri ??ekilemedi";

    }

    

    

}catch (PDOException $h) {

    $hata=$h->getMessage();

    echo "<b>HATA VAR :</b> ".$hata;//ba??lant?? hatas?? olursa.hata var yaz.

}

?>

 
        </section>
    </section>

</body>

</html>