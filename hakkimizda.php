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

<script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/600e9767c31c9117cb721f8b/1essfurl1';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
        })();
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
         <?php 
         echo $_SESSION["SIRKET"];
         ?>
        
        </a></h3>
        <p>turkeycargo.com.tr <a href="bayilik/bayilik.php"></a></p>
        </div>
    </div>
    <div class="search">
        <input type="text" placeholder="Buraya"><i class="fa fa-search"></i>
    </div>
    <ul class="categories">
        <li><i class="fa fa-home fa-fw" aria-hidden="true"></i><a href="admin.php"> Profil</a>
     
        </li>
        <li><i class="fa fa-support fa-fw"></i><a href="kurye.php"> Kurye ??a??r??s?? Yap</a>
        </li>
        <li><i class="fa fa-wrench fa-fw"></i><a href="acil.php">H??zl??  ??leti??im <span class="num dang"></span></a></li>
        <li><i class="fa fa-wrench fa-fw"></i><a href="hesapla.php"> Hesaplama <span class="num dang"></span></a></li>
        <li><i class="fa fa-envelope-open-o fa-fw"></i><a href="mesajgonder.php"> Mesajlar <span class="num prim"></span></a>
       
        </li>
        <li><i class="fa fa-laptop fa-fw"></i><a href="hakkimizda.php"> Hakk??m??zda &amp; <span class="num succ"></span></a></li>
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
                <h2>Turkey Cargo Dashboard</h2>
                <p>Ho??geldiniz</p>
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
    
        <b style="widht:200px">Aksaray Fatih / ??stanbul K??????k Langa Caddesi No 100 </b><br>
<b style="widht:200px"><a href="www.turkeycargo.com.tr">turkeycargo.com.tr</a></b><br>
<b style="widht:200px"><p><a href="mailto:info@turkeycargo.com.tr">info@turkeycargo.com.tr</a></p></b><br>

<b style="widht:200px;color:red">Sorular??n??z?? m????teri temsilcisine sorabilirsiniz. </b>
<p>Uluslararas?? Kargo</p>


<img src="ddddd.fw.png" style="width:500px;">
        </section>
        <section class="chrt3">
        <div class="container-fluid">
            <div class="row">
            <div class="col-md-9">
                <div class="chart-container">
                <canvas id="chart3" width="100%"></canvas>
                </div>
            </div>
            <div class="col-md-4">
                <div class="box">
                </div>
            </div>
            </div>
        </div>
        </section>
    </section>

</body>

</html>





