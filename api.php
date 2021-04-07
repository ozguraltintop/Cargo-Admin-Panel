<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<style>
      @import url('https://fonts.googleapis.com/css?family=Coustard:300,400&display=swap');
    @import url(https://fonts.googleapis.com/css?family=Lato:300,900);


    p{
      font-size: 25px;
    }

    p strong{
      font-family: Lato;
      font-size: 40px;
    }

    .item{
      width: 250px;
      height: 250px;
      background-color: white;
      position: relative;
      display: inline-block;
      margin: 1% 2% 1% 0%;
      overflow: hidden;
      box-shadow: 2px 3px 10px #444444;
    }

    .item .overlay{
      color: #000;
      width: 100%;
      height: 100%;
      background-color: #fff;
      opacity: 0;
      transition: all 0.5s ease;
      position: absolute;
      top: 0; 
      bottom: 0;
    }

    /* effect-clean*/
    .clean .overlay span:nth-child(1){
      position: absolute;
      left: 30%;
      top: 35%;
      font-size: 80px;
      font-weight: bold;
      font-family: coustard;
      transform: translateX(-50%);
    }

    .clean .overlay span:nth-child(2){
      position: absolute;
      top: 50%;
      left: 50%;
      font-size: 17px;
      transform: translateX(-50%);
    }

    .clean .overlay span:nth-child(3){
      height: 3px;
      background-color: #000;
      position: absolute;
      top: 60%;
      left: 0;
    }

    .clean .overlay:hover{
      opacity: 0.93;
    }

    .clean .overlay:hover span:nth-child(1){
      animation: slide 0.4s;
    }

    .clean .overlay:hover span:nth-child(2){
      animation: slide 0.7s;
    }

    .clean .overlay:hover span:nth-child(3){
      animation: line 0.5s forwards;
    }

    @keyframes slide{
      0%   {transform:translateX(-10%);}
      100% {transform:translateX(-50%);}
    }

    @keyframes line{
      0%   {width: 0;}
      100% {width: 50%}
    }

    /* effect-uncover*/

    .uncover .overlay span:nth-child(1){
      position: absolute;
      left: 50%;
      top: 35%;
      font-size: 80px;
      font-weight: bold;
      font-family: coustard;
      transform: translateX(-50%);
      opacity: 0;
    }

    .uncover .overlay span:nth-child(2){
      position: absolute;
      top: 50%;
      left: 50%;
      font-size: 17px;
      transform: translateY(-50%);
      transform: translateX(-50%);
      opacity: 0;
    }

    .uncover .overlay span:nth-child(3){
      height: 30px;
      background-color: #000;
      position: absolute;
      top: 38%;
      opacity: 0;
    }

    .uncover .overlay span:nth-child(4){
      height: 30px;
      background-color: #000;
      position: absolute;
      top: 50%;
      left: 25%;
      opacity: 0;
    }

    .uncover .overlay:hover{
      opacity: 0.9;
    }

    .uncover .overlay:hover span:nth-child(1){
      animation: fadein 0.6s forwards;
        animation-delay: 0.5s;
    }

    .uncover .overlay:hover span:nth-child(2){
      animation: fadein 0.6s forwards;
      animation-delay: 0.75s;
    }

    .uncover .overlay:hover span:nth-child(3){
      animation: draw-left 0.7s;
    }

    .uncover .overlay:hover span:nth-child(4){
      animation: draw-right 0.7s;
      animation-delay: 0.6s;
    }

    @keyframes draw-left{
      0%   {
        opacity: 0; 
        width: 0px;
        left: 75%}
      50% {
        opacity: 1;
        left: 25%;
        width: 200px;}
      
      100% {
        opacity: 0;
        width: 0px;
        left: 25%;}
    }

    @keyframes draw-right{
      0%   {
        opacity: 0; 
        width: 0px;
    }
      50% {
        opacity: 1;
        width: 200px;
      }
      
      100% {
        opacity: 0;
        width: 0px;
        }
    }

    @keyframes fadein{
      0%   {
        opacity: 0;} 
      100%   {
        opacity: 1; }
    }

    /* effect-explode */
    .explode .overlay span:nth-child(1){
      position: absolute;
      left: 10%;
      top: 45%;
      font-size: 200px;
      font-weight: bold;
      font-family: coustard;
      transform: translateX(-50%);
      opacity: 0;
    }

    .explode .overlay span:nth-child(2){
      position: absolute;
      top: 80%;
      left: 10%;
      font-size: 17px;
      opacity: 0;
    }

    .explode .overlay span:nth-child(3){
      position: absolute;
      top: 90%;
      left: 0;
      height: 60px;
      background-color: #000;
    }

    .explode .overlay:hover{
      opacity: 0.9;
    }

    .explode .overlay:hover span:nth-child(1){
      animation: focus 0.4s forwards;
      animation-delay: 0.2s;
    }

    .explode .overlay:hover span:nth-child(2){
      animation: focus 0.4s forwards;
      animation-delay: 0.4s;
    }

    .explode .overlay:hover span:nth-child(3){
      animation: block 0.3s forwards;
      animation-delay: 0.15s;
    }

    @keyframes focus{
      0%   {
        transform:scale(1.4) translateX(-30%);
        filter: blur(10px);
        opacity: 0;
      }
      100% {
        transform:scale(1) translateX(0%);
        filter: blur(0px);
        opacity: 1;
      }
    }

    @keyframes block{
      0%   {
        width:0;
        filter: blur(5px);
        opacity: 0;
      }
      100% {
        width: 100%;
        filter: blur(0px);
        opacity: 1;
      }
    }

</style>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="admindash.css"> 
<script src="leftbar.js" type="text/javascript"></script>
<script type="text/javascript" src="jquery-1.3.2.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="/java.js"></script>
    <link href="stylex.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" rel="stylesheet">
<script>
                function deneme() {
                
                s1= parseInt(document.getElementById('yuk').value);
                s2= parseInt(document.getElementById('en').value);
                s3= parseInt(document.getElementById('boy').value);
                s4= parseInt(document.getElementById('agr').value);
                var cboxes = document.getElementById('paketx');
                checked = (cboxes.checked?'1':'0');
                if(checked==1)
                {
                var ilkdeger = s1*s2*s3/5000;
                    if(ilkdeger>s4){
                    document.getElementById('son').value = s1*s2*s3*35/50000;
                    return 'son';
                    }
                    else{
                    document.getElementById('son').value = s4*35/10;
                    }
                }
                else
                {	
                    document.getElementById('son').value = s1*s2*s3/100000*35;
                return 'son';

            };
            };
            
</script>
<style>
        .css-input1 {
            padding: 4px;
            font-size: 20px;
            border-width: 4px;
            border-color: #f90000;
            background-color: #eee7e7;
            color: #000000;
            border-style: outset;
            border-radius: 19px;
            box-shadow: 0px 0px 5px rgba(66,66,66,.75);
            text-shadow: 0px 0px 5px rgba(66,66,66,.75);
        }
        .css-input1:focus {
            outline:none;
        }



        .select {
        position: relative;
        display: inline-block;
        margin-bottom: 15px;
        width: 100%;
    }    .select select {
            font-family: 'Arial';
            display: inline-block;
            width: 100%;
            cursor: pointer;
            padding: 26px 30px;
            outline: 0;
            border: 4px hidden #000000;
            border-radius: 0px;
            background: #e6e6e6;
            color: #7b7b7b;
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
        }
            .select select::-ms-expand {
                display: none;
            }
            .select select:hover,
            .select select:focus {
                color: #180202;
                background: #cccccc;
            }
            .select select:disabled {
                opacity: 0.5;
                pointer-events: none;
            }
            .select_arrow {
                position: absolute;
                top: 32px;
                right: 15px;
                pointer-events: none;
                border-style: solid;
                border-width: 8px 5px 0px 5px;
                border-color: #7b7b7b transparent transparent transparent;
            }
            .select select:hover ~ .select_arrow,
            .select select:focus ~ .select_arrow {
                border-top-color: #000000;
            }
            .select select:disabled ~ .select_arrow {
                border-top-color: #cccccc;
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