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
                           
            input[type="date"] {
            display:block;
            position:relative;
            padding:1rem 3.5rem 1rem 0.75rem;
            
            font-size:1rem;
            font-family:monospace;
            
            border:1px solid #8292a2;
            border-radius:0.25rem;
            background:
                white
                url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='20' height='22' viewBox='0 0 20 22'%3E%3Cg fill='none' fill-rule='evenodd' stroke='%23688EBB' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' transform='translate(1 1)'%3E%3Crect width='18' height='18' y='2' rx='2'/%3E%3Cpath d='M13 0L13 4M5 0L5 4M0 8L18 8'/%3E%3C/g%3E%3C/svg%3E")
                right 1rem
                center
                no-repeat;
            
            cursor:pointer;
            }
            input[type="date"]:focus {
            outline:none;
            border-color:#3acfff;
            box-shadow:0 0 0 0.25rem rgba(0, 120, 250, 0.1);
            }

            ::-webkit-datetime-edit {}
            ::-webkit-datetime-edit-fields-wrapper {}
            ::-webkit-datetime-edit-month-field:hover,
            ::-webkit-datetime-edit-day-field:hover,
            ::-webkit-datetime-edit-year-field:hover {
            background:rgba(0, 120, 250, 0.1);
            }
            ::-webkit-datetime-edit-text {
            opacity:0;
            }
            ::-webkit-clear-button,
            ::-webkit-inner-spin-button {
            display:none;
            }
            ::-webkit-calendar-picker-indicator {
            position:absolute;
            width:2.5rem;
            height:100%;
            top:0;
            right:0;
            bottom:0;
            
            opacity:0;
            cursor:pointer;
            
            color:rgba(0, 120, 250, 1);
            background:rgba(0, 120, 250, 1);
            
            }

            input[type="date"]:hover::-webkit-calendar-picker-indicator { opacity:0.05; }
            input[type="date"]:hover::-webkit-calendar-picker-indicator:hover { opacity:0.15; }

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
        <p style="color:red">ADMIN <a href="deneme.php">A</a></p>
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
                <p style="color:red">Gelen Müşteri Kayıt</p>
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
        <div class="container-fluid">
            <div class="row">
          




            <?php

$db =new PDO('mysql:host=localhost;dbname=yapilacaklar_db','root','');
$gorevler = $db->query("select * from musteri");

?>


<hr/>


         
            </div>
        </div>
        </section>
        <section class="chrt3">
        <p style="color:blue">Gelen Müşteri Kayıt</p>
        <div class="container-fluid">
            <div class="row">
            


<form action="musterikayite.php" method="POST">
<span style="color:red">Tarih: </span><input type="date" name="tarih" value="2017-01-01" min="2005-01-01" max="2019-01-01"><br>
<span style="color:red">Adı :</span><input type="text" name="madi" class="col-sm-12 col-form-label"><br>
<span style="color:red">Soyadı :</span><input type="text" name="msoyadi" class="col-sm-12 col-form-label"><br>
<span style="color:red">Nereye Gönderildi : </span><input type="text" name="nereye" class="col-sm-12 col-form-label"><br>
<span style="color:red">Eşya  : </span><input type="text" name="neverdi" class="col-sm-12 col-form-label"><br>
<span style="color:red">Takip No : </span><input type="text" name="takipno" class="col-sm-12 col-form-label"><br>
<span style="color:red">Marka mı : </span><input type="text" name="marka" class="col-sm-12 col-form-label"><br>
<input type="radio" id="firma" name="firma" value="ups" checked>
<label style="color:white">Ups</label><br>
<input type="radio" id="firma" name="firma" value="fedex">
<label style="color:white">Fedex</label><br>


<span style="color:red">Gercek Takip Numarasi: </span><input type="text" name="gercektakipno" class="col-sm-12 col-form-label"><br>
<span style="color:red">Ücret : </span><input type="text" name="para" class="col-sm-12 col-form-label"><br>

<input type="radio" id="tur" name="tur" value="Dolar" checked>
<label style="color:white">$  Dolar</label><br>
<input type="radio" id="tur" name="tur" value="Euro">
<label style="color:white">€  Euro</label><br>
<input type="radio" id="tur" name="tur" value="TL">
<label style="color:white">₺  TL</label><br>

<input type="submit" value="Kaydet" class="btn btn-danger" >

</form>




            </div>
        </div>
        </section>
    </section>

</body>

</html>