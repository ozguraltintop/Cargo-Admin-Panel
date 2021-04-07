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
            function kuryegonder()
            {
                alert('KURYE  TALEBİNİZ ALINMITIR.'); 

            }
        </script>


        <style>
                            * {
                    padding: 0;
                    margin: 0;
                    box-sizing: border-box;
                    font-family: sans-serif;
                    }
                    .ui-input-container {
                    background-color: #fff;
                    padding: 3rem;
                    border-radius: 4px;
                    width: 50%;
                    margin: 0 auto;
                    }
                    .ui-input-container h2 {
                    font-family: sans-serif;
                    margin-bottom: 20px;
                    font-weight: 700;
                    text-transform: capitalize;
                    }
                    .ui-form-input-container {
                    position: relative;
                    font-size: 1rem;
                    margin-bottom: 15px;
                    display: block;
                    }
                    .ui-form-input {
                    padding: 13px 15px;
                    border-radius: 8px;
                    border: 2px solid #1a73e8;
                    outline: 0;
                    width: 100%;
                    }

                    .form-input-label {
                    position: absolute;
                    top: -7px;
                    left: 10px;
                    color: #1a73e8;
                    font-size: 0.85rem;
                    padding-right: 0.33rem;
                    padding-left: 0.33rem;
                    background: #fff;
                    transition: all 0.15s cubic-bezier(0.4, 0, 0.2, 1);
                    font-family: sans-serif;
                    text-transform: capitalize;
                    }

                    .ui-form-btn {
                    padding: 13px 15px;
                    border-radius: 8px;
                    background: #1a73e8;
                    outline: 0;
                    width: 100%;
                    border: none;
                    cursor: pointer;
                    font-size: 1rem;
                    color: white;
                    font-weight: 500;
                    }

                    .error .ui-form-input,
                    .error .form-input-label {
                    border-color: #d50000;
                    color: #d50000;
                    }

                    textarea {
                    min-height: 6em;
                    max-height: 50vh;
                    width: 100%;
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
         echo $_SESSION["SIRKET"];
         ?>
        
        </a></h3>
        <p>turkeycargo.com.tr <a href="deneme.php"></a></p>
        </div>
    </div>
    <div class="search">
        <input type="text" placeholder="Buraya"><i class="fa fa-search"></i>
    </div>
    <ul class="categories">
        <li><i class="fa fa-home fa-fw" aria-hidden="true"></i><a href="admin.php">Profil</a>
      
        </li>
        <li><i class="fa fa-support fa-fw"></i><a href="kurye.php"> Kurye Çağrısı Yap</a>
      
        </li>
        <li><i class="fa fa-wrench fa-fw"></i><a href="acil.php">Hızlı  İletişim <span class="num dang"></span></a></li>

        <li><i class="fa fa-wrench fa-fw"></i><a href="hesapla.php"> Hesaplama <span class="num dang"></span></a></li>
        <li><i class="fa fa-envelope-open-o fa-fw"></i><a href="mesajgonder.php"> Mesajlar <span class="num prim"></span></a>
   
        </li>
        <li><i class="fa fa-laptop fa-fw"></i><a href="hakkimizda.php"> Hakkımızda &amp; <span class="num succ"></span></a></li>
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
                <h2>Turkey Cargo Dashboard</h2>
                <p>Hoşgeldiniz</p>
            </div>
            </div>
        </div>
        </div>
    </div>
  
    <section class='statis text-center'>
   
    <form action = "kuryekayit.php" method = "POST">
         <p style="color:red">Eşyanın kaç kilo olduğunu ve kuryenin saat kaçta orada olması gerektiğine dair bilgileri detaylı giriniz.</p>
         <br>

         <div class="md-form">
  <i class="fas fa-pencil-alt prefix"></i>
  <textarea id="form10" class="md-textarea form-control" rows="3" name = "kuryenotum"></textarea>
  <label for="form10"></label>
</div>
      
         <input type = "submit" value = "Gonder" class="btn btn-primary" onclick="kuryegonder();" />
      </form>
       
    </section>

 

</body>

</html>