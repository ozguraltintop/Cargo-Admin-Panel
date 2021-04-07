<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="admindash.css"> 
<link rel="stylesheet" href="cube.css"> 
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
        <p>turkeycargo.com.tr <a href="deneme.php">A</a></p>
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
$result = $_POST['secimim'];
$result_explode = explode('|', $result);  
$en=$_POST["en"];
$boy=$_POST["boy"];
$yukseklik=$_POST["yukseklik"];
$agirlik=$_POST["agirlik"];
$komisyon=$_SESSION["DEGER"];
$bug=$en*$boy*$yukseklik/5000;

$con=new mysqli("localhost","root","","yapilacaklar_db");
if($con->connect_error){
    echo 'Connection Faild: '.$con->connect_error;
    }else{
        
    

          
         if($bug>$agirlik){
            
            $hazir=ceil($bug);
            $sql="select * from upsfiyat where  agr = '$hazir'";

            $res=$con->query($sql);
          
            while($row=$res->fetch_assoc()){
                $toplam1=$row["$result_explode[0]"]*$komisyon/100;
                $toplam2=$row["$result_explode[1]"]*$komisyon/100;
              
                echo "<img src=cargo1.png>";
                echo "<b>UPS FİYAT: </b>".$row["$result_explode[0]"]+$toplam1 ." € <br /> "; 
                echo "<img src=cargo2.png>";
                echo "<b>FEDEX FİYAT:</b>".$row["$result_explode[1]"]+$toplam2 ." €<br /><br><br><br>"; 
                echo '<a href="hesapla.php">GERİ</a>'; 
                }   
        }
        else{
            
            $hazir1=ceil($agirlik);

            $sql="select * from upsfiyat where  agr = '$hazir1'";

            $res=$con->query($sql);
         
            while($row=$res->fetch_assoc()){
                $toplam1=$row["$result_explode[0]"]*$komisyon/100;
                $toplam2=$row["$result_explode[1]"]*$komisyon/100;
                echo "<img src=cargo1.png>";
                echo "<b>UPS FİYAT: </b>".$row["$result_explode[0]"]+$toplam1 ." € <br /> "; 
                echo "<img src=cargo2.png>";
                echo "<b>FEDEX FİYAT:</b>".$row["$result_explode[1]"]+$toplam2 ." €<br /><br><br><br>"; 
                echo '<a href="hesapla.php">GERİ</a>';  
                }  }   
        }
}
?>


<div class="container">
  <div class="cube">
    <div class="face top"></div>
    <div class="face bottom"></div>
    <div class="face left"></div>
    <div class="face right"><b style="color:black;">En <---> </b></div>
    <div class="face front"><b style="color:black;">Yukseklik |</b></div>
    <div class="face back"><b style="color:black;">Boy |</b></div>
  </div>
</div>




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