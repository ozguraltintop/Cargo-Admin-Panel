<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
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
<img src="thycargo.png" style="width:500px;height:200px;">


<form action="ready.php" method="POST">


<div class="form-outline">
  <input type="text" id="form1" class="form-control" name="enx" />
  <label class="form-label" for="form1">En (Cm)</label>
</div>
<div class="form-outline">
  <input type="text" id="form1" class="form-control" name="boyx" />
  <label class="form-label" for="form1">Boy (Cm)</label>
</div>
<div class="form-outline">
  <input type="text" id="form1" class="form-control"  name="yukseklikx"/>
  <label class="form-label" for="form1">Yükseklik (Cm)</label>
</div>
<div class="form-outline">
  <input type="text" id="form1" class="form-control"  name="ready" />
  <label class="form-label" for="form1">Kilogram KG</label>
</div>


<select name="choise">
<option value="None" selected>-- Seçiniz --</option>
                <option value="Afgan">Afganistan</option>
                <option value="Almanya">Almanya</option>
                <option value="Usa">Amerika Birlesik Devletleri</option>
              
                <option value="Arjantin">Arjantin</option>
                <option value="Arnavutluk">Arnavutluk</option>
          
                <option value="Avusturya">Avusturya</option>
                <option value="Avustralya">Avustralya</option>
                <option value="Azerbeycan">Azerbeycan</option>
       

                <option value="Bahreyn">Bahreyn</option>
                <option value="Banglades">Banglades</option>
                <option value="Barbados">Barbados</option>
                <option value="Burkina">Burkina Faso</option>
           
                <option value="Belarus">Belarus</option>
                <option value="Belcika">Belcika</option>
       

                <option value="Emirlik">Birlesik Arap Emirlikleri</option>
                <option value="Bolivya">Bolivya</option>
            
                <option value="Bosna">Bosna Hersek</option>
         
                <option value="Brezilya">Brezilya</option>
                
                <option value="Bulgaristan">Bulgaristan</option>
              
             
                <option value="Cad">Cad</option>
                <option value="Cezayir">Cezayir</option>
        
               
                <option value="Cad">Cad</option>
                <option value="Cekya">Çekya</option>
                <option value="Cin">Çin</option>
                <option value="Danimarka">Danimarka</option>
           
                <option value="Ekvator">Ekvator</option>
     
                <option value="Endonezya">Endonezya</option>
          
                <option value="dort|">Ermenistan</option>
                <option value="Estonya">Estonya</option>
                <option value="Etiyopya">Etiyopya</option>
 
                <option value="Fas">Fas</option>
                <option value="Fildisi">Fildişi Sahilleri</option>
                <option value="Filipin">Filipinler</option>
                <option value="Fillandiya">Fillandiya</option>
                <option value="Fransa">Fransa</option>
     
                <option value="Gabon">Gabon</option>
                <option value="iki|">Galler</option>
                <option value="Gambiya">Gambiya</option>
                <option value="Gana">Gana</option>

                <option value="Gine">Gine</option>
 
           
                <option value="Gurcistan">Gürcistan</option>
    
                <option value="Hirvatistan">Hırvatistan</option>
                <option value="India">Hindistan</option>
                <option value="Hollanda">Hollanda</option>
                <option value="Hong">Hong Kong</option>
                <option value="Irak">Irak</option>
                <option value="Iran">Iran</option>
                <option value="UK">İngiltere</option>
                <option value="Irlanda">İrlanda Cumhuriyeti</option>
                <option value="Ispanya">İspanya</option>
                <option value="Israil">İsrail</option>
                <option value="Isvec">İsveç</option>
                <option value="Isvicre">İsviçre</option>
                <option value="Italy">İtalya</option>
                <option value="Japan">Japonya</option>
                <option value="Jordan">Jordan</option>
              
                <option value="Kombodiya">Kombodiya</option>
                <option value="Kamerun">Kamerun</option>
                <option value="Kanada">Kanada</option>
  
                <option value="Katar">Katar</option>
                <option value="Kazakistan">Kazakistan</option>
                <option value="Kenya">Kenya</option>
                <option value="Kktc">Kıbrıs</option>
                <option value="Kirgizistan">Kırgızistan</option>

                <option value="Kolombiya">Kolombiya</option>
                <option value="Komor">Komor</option>
                <option value="Kongo">Kongo</option>
                <option value="Kore">Güney Kore</option>
                <option value="Kosova">Kosova</option>
                <option value="Kuveyt">Kuveyt</option>
                <option value="Kuba">Kuba</option>
                <option value="Kuzey">Kuzey Afrika</option>
                <option value="Laos">Laos</option>
                <option value="Lebanon">Lebanon</option>
                <option value="Letonya">Letonya</option>
                <option value="Liberyas">Liberya</option>
                <option value="Libya">Libya</option>
                <option value="Litvanya">Litvanya</option>
                <option value="Luksenburg">Lüksenburg</option>
                <option value="Macaristan">Macaristan</option>
                <option value="alti|fuc">Makao</option>
                <option value="Madagaskar">Madagaskar</option>
                <option value="uc|">Madelra</option>
                <option value="Makedonya">Makedonya</option>
                <option value="dokuz|">Malavi</option>
                <option value="Maldiv">Maldiv Adaları</option>
                <option value="Malezya">Malezya</option>
                <option value="Mali">Mali</option>
                <option value="Malta">Malta</option>
                <option value="Moritanya">Moritanya</option>
                <option value="Meksika">Meksika</option>
                <option value="Misir">Mısır</option>
                <option value="Mogolistan">Moğolistan</option>
                <option value="Moldova">Moldova</option>
                <option value="Monako">Monako</option>
                <option value="Mozambik">Mozambik</option>
                <option value="Myanmar">Myanmar</option>
                <option value="Nepal">Nepal</option>
                <option value="sekiz|">Neviş</option>
                <option value="Niger">Niger</option>
                <option value="Nijerya">Nijerya</option>
                <option value="sekiz|fiki">Nikaragua</option>
                <option value="Norvec">Norveç</option>
                <option value="Oman">Oman</option>
                <option value="Ozbek">Özbekistan</option>
                <option value="Pakistan">Pakistan</option>
                <option value="dokuz|fbes">Palau</option>
                <option value="Panama">Panama</option>
                <option value="Paraguay">Paraguay</option>
                <option value="Peru">Peru</option>
                <option value="Polonya">Polonya</option>
                <option value="dokuz|">Ponape</option>
                <option value="Portekiz">Portekiz</option>
                <option value="Rwanda">Rwanda</option>
                <option value="Romanya">Romanya</option>
                <option value="Rusya">Rusya</option>
                <option value="sekiz|">Saba</option>
                <option value="dokuz|">Salpan</option>
                <option value="dokuz|fbes">Samoa</option>
                <option value="dort|">San Marino</option>
                <option value="dokuz|">Sao Tome</option>
                <option value="Senegal">Senegal</option>
                <option value="Sirbistan">Sırbistan</option>
                <option value="Sierra">Sierra</option>
                <option value="Singapur">Singapur</option>
                <option value="Sudan">Sudan</option>

                <option value="Somali">Somali</option>
                <option value="Slovakya">Slovakya</option>
                <option value="Slovenya">Slovenya</option>
               
                <option value="Srilanka">Sri Lanka</option>
                <option value="Singapur">Singapur</option>
                <option value="Suud">Suudi Arabistan</option>
                <option value="yedi|">Swazliand</option>
                <option value="Tacikistan">Tacikistan</option>
        
                <option value="Tanzanya">Tanzanya</option>
                <option value="Tayland">Tayland</option>
                <option value="Tayvan">Tayvan</option>
 
                <option value="Tunus">Tunus</option>
                <option value="Tunus">Tunus</option>
                <option value="Turkmenistan">Türkmenistan</option>
                <option value="Uganda">Uganda</option>
                <option value="Ukrayna">Ukrayna</option>

                <option value="Uae">Uae</option>
       
                <option value="Uruguay">Uruguay</option>
              
                <option value="Vietnam">Vietnam</option>
                <option value="Venezuela">Venezuela</option>
          
      
                <option value="Yunanistan">Yunanistan</option>
                <option value="Zambiya">Zambiya </option>
                <option value="Zimbabve">Zimbabve </option>
</select>

<input type="submit" value="Gonder" class="btn-btn danger">
</form>


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