<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
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

<script>
    function ClearFields1() {
    document.getElementById("x1").value = "";
    }
    function ClearFields2() {
    document.getElementById("x2").value = "";
    }
    function ClearFields3() {
    document.getElementById("x3").value = "";
    }
    function ClearFields4() {
    document.getElementById("x4").value = "";
    }
</script>
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

<?php 


if($_POST)
{
$enx=$_POST["enx"];
$boyx=$_POST["boyx"];
$yukseklikx=$_POST["yukseklikx"];
$bugi=$enx*$boyx*$yukseklikx/5000;
$konsimento=150;
  $result = $_POST['choise'];
  $olcum=$_POST['ready'];
  $con=new mysqli("localhost","root","","yapilacaklar_db");
  if($con->connect_error)
  {echo 'Connection Hatatası'.$con->connect_error;}
  else
  {
                if($olcum>$bugi){
    
                    $sql="select * from turkishcargo where sehir = '$result' ";
                    $res=$con->query($sql);
                    if($olcum<100){
                        while($row=$res->fetch_assoc())
                        {        
                                echo '<img src="source.gif" style="width:70px";>';
                                echo "".$row["sehir"].'<br>';
                                echo '<b style="color:purple;">Havalimanı</b>  : '  .$row["alan"].'<br>';
                                echo "Fiyatınız = ".$row["Q45"]*$olcum+$konsimento."  $<br><br>";
                                
                        }
                    }
                    else if($olcum>100 && $olcum<300){
                        while($row=$res->fetch_assoc())
                        {        
                                echo '<img src="source.gif" style="width:70px";>';
                                echo "".$row["sehir"].'<br>';
                                echo '<b style="color:purple;">Havalimanı</b>  : '  .$row["alan"].'<br>';
                                echo "Fiyatınız = ".$row["Q100"]*$olcum+$konsimento."  $<br><br>";
                                
                        }


                    }
                    else if($olcum>300 && $olcum<500){

                        while($row=$res->fetch_assoc())
                        {        
                                echo '<img src="source.gif" style="width:70px";>';
                                echo "".$row["sehir"].'<br>';
                                echo '<b style="color:purple;">Havalimanı</b>  : '  .$row["alan"].'<br>';
                                echo "Fiyatınız = ".$row["Q300"]*$olcum+$konsimento."  $<br><br>";
                                
                        }

                    }
                    else if($olcum>500 && $olcum<1000){

                        while($row=$res->fetch_assoc())
                        {        
                                echo '<img src="source.gif" style="width:70px";>';
                                echo "".$row["sehir"].'<br>';
                                echo '<b style="color:purple;">Havalimanı</b>  : '  .$row["alan"].'<br>';
                                echo "Fiyatınız = ".$row["Q500"]*$olcum+$konsimento."  $<br><br>";
                                
                        }

                    }
                    else if($olcum>1000){

                        while($row=$res->fetch_assoc())
                        {        
                                echo '<img src="source.gif" style="width:70px";>';
                                echo "".$row["sehir"].'<br>';
                                echo '<b style="color:purple;">Havalimanı</b>  : '  .$row["alan"].'<br>';
                                echo "Fiyatınız = ".$row["Q1000"]*$olcum+$konsimento."  $<br><br>";
                                
                        }

                    }
                    else{

                    }

                
                    
                    
                    
                }
            
            
                else{
    
                    $sql="select * from turkishcargo where sehir = '$result' ";
                    $res=$con->query($sql);
                    if($bugi<100){
                        while($row=$res->fetch_assoc())
                        {        
                                echo '<img src="source.gif" style="width:70px";>';
                                echo "".$row["sehir"].'<br>';
                                echo '<b style="color:purple;">Havalimanı</b>  : '  .$row["alan"].'<br>';
                                echo "Fiyatınız = ".$row["Q45"]*$bugi+$konsimento."  $<br><br>";
                                
                        }
                    }
                    else if($bugi>100 && $bugi<300){
                        while($row=$res->fetch_assoc())
                        {        
                                echo '<img src="source.gif" style="width:70px";>';
                                echo "".$row["sehir"].'<br>';
                                echo '<b style="color:purple;">Havalimanı</b>  : '  .$row["alan"].'<br>';
                                echo "Fiyatınız = ".$row["Q100"]*$bugi+$konsimento."  $<br><br>";
                                
                        }


                    }
                    else if($bugi>300 && $bugi<500){

                        while($row=$res->fetch_assoc())
                        {        
                                echo '<img src="source.gif" style="width:70px";>';
                                echo "".$row["sehir"].'<br>';
                                echo '<b style="color:purple;">Havalimanı</b>  : '  .$row["alan"].'<br>';
                                echo "Fiyatınız = ".$row["Q300"]*$bugi+$konsimento."  $<br><br>";
                                
                        }

                    }
                    else if($bugi>500 && $bugi<1000){

                        while($row=$res->fetch_assoc())
                        {        
                                echo '<img src="source.gif" style="width:70px";>';
                                echo "".$row["sehir"].'<br>';
                                echo '<b style="color:purple;">Havalimanı</b>  : '  .$row["alan"].'<br>';
                                echo "Fiyatınız = ".$row["Q500"]*$bugi+$konsimento."  $<br><br>";
                                
                        }

                    }
                    else if($bugi>1000){

                        while($row=$res->fetch_assoc())
                        {        
                                echo '<img src="source.gif" style="width:70px";>';
                                echo "".$row["sehir"].'<br>';
                                echo '<b style="color:purple;">Havalimanı</b>  : '  .$row["alan"].'<br>';
                                echo "Fiyatınız = ".$row["Q1000"]*$bugi+$konsimento."  $<br><br>";
                                
                        }

                    }
                    else{

                    }
            
            
            
            
            
            }

                
        }




}



?>


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