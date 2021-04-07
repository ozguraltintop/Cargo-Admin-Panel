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

<a href="ihracat.php">İhracat</a>

<img src="box.png" style="width:200px;">

        <form  method="POST" action="veritabani2.php">
          
            <input type="text" id="x1" onclick="ClearFields1()"; name="en" class="css-input1" value="En (Cm)" style=" border-color: #08f36c;">
            <input type="text" id="x2" onclick="ClearFields2()"; name="boy" class="css-input1"  value="Boy (Cm)" style="border-color: #0b17de;">
            <input type="text" id="x3" onclick="ClearFields3()"; name="yukseklik" class="css-input1"  value="Yükseklik (Cm)" ><br><br>
            <input type="text" id="x4" onclick="ClearFields4()"; name="agirlik" class="css-input1" style=" border-color:black;" value="Ağırlık (KG)"><br><br>
         <div class="select">
            <select id="sehir" name="secimim" class="boxx">
                <option value="None" selected>-- Seçiniz --</option>
                <option value="dort|fdort|tuc">Afganistan</option>
                <option value="bir|falti">Almanya</option>
                <option value="bes|fbir">Amerika Birlesik Devletleri</option>
                <option value="sekiz|fbes">Amerika Samoası</option>
                <option value="dort|falti">Andora</option>
                <option value="sekiz|fiki">Angila</option>
                <option value="dokuz|fbes">Angola</option>
                <option value="sekiz|fiki">Antigua ve Barbuda</option>
                <option value="sekiz|fiki">Arjantin</option>
                <option value="dort|fon">Arnavutluk</option>
                <option value="sekiz|fiki">Aruba</option>
                <option value="iki|falti">Avusturya</option>
                <option value="yedi|fuc">Avustralya</option>
                <option value="dort|fbes">Azerbeycan</option>
                <option value="uc|">Azor Adaları</option>
                <option value="sekiz|fiki">Bahamalar</option>
                <option value="dort|fdort">Bahreyn</option>
                <option value="yedi|fdort">Banglades</option>
                <option value="sekiz|fiki">Barbados</option>
                <option value="sekiz|">Barbuda</option>
                <option value="dort|">Batı Seria</option>
                <option value="iki|fon">Belarus</option>
                <option value="iki|falti">Belcika</option>
                <option value="sekiz|fiki">Belize</option>
                <option value="dokuz|fbes">Benin</option>
                <option value="sekiz|fiki">Bermuda</option>
                <option value="yedi|">Butan</option>
                <option value="dort|fdort">Birlesik Arap Emirlikleri</option>
                <option value="sekiz|fiki">Bolivya</option>
                <option value="sekiz">Bonaire</option>
                <option value="dort|fon">Bosna Hersek</option>
                <option value="dokuz|fbes">Botsvana</option>
                <option value="sekiz|fiki">Brezilya</option>
                <option value="yedi|fuc">Brunel Darruselam</option>
                <option value="iki|fyedi">Bulgaristan</option>
                <option value="dokuz|fbes">Burkina Faso</option>
                <option value="dokuz|fbes">Burindi</option>
                <option value="dokuz|fbes">Cape Verde Adaları</option>
                <option value="sekiz|fiki">Cayman Adaları</option>
                <option value="dort">Cebelitarık</option>
                <option value="alti">Ceuta</option>
                <option value="alti|fdort">Cezayir</option>
                <option value="dokuz|fbes">Cook Adaları</option>
                <option value="sekiz|iki">Curacao</option>
                <option value="dokuz|fbes">Cad</option>
                <option value="uc|fyedi">Çekya</option>
                <option value="alti|fuc">Çin</option>
                <option value="iki|fsekiz">Danimarka</option>
                <option value="dokuz|fuc">Dogu Timur</option>
                <option value="sekiz|fiki">Dominik Cumhuriyeri</option>
                <option value="sekiz|fiki">Dominika</option>
                <option value="sekiz|fiki">Ekvator</option>
                <option value="dokuz|">Ekvator Ginesi</option>
                <option value="sekiz|fiki">El Salvador</option>
                <option value="alti|fuc">Endonezya</option>
                <option value="dokuz|fbes">Eritre</option>
                <option value="dort|">Ermenistan</option>
                <option value="dort|fsekiz">Estonya</option>
                <option value="dokuz|fbes">Etiyopya</option>
                <option value="alti|fsekiz">Faroe Adaları</option>
                <option value="yedi|fdort">Fas</option>
                <option value="dokuz|fbes">Fiji Adası</option>
                <option value="dokuz|">Fildişi Sahilleri</option>
                <option value="alti|">Filipinler</option>
                <option value="uc|fsekiz">Fillandiya</option>
                <option value="iki|falti">Fransa</option>
                <option value="sekiz|fiki">Fransız Guvanası</option>
                <option value="dokuz|fbes">Fransız Polinezyası</option>
                <option value="dokuz|fbes">Gabon</option>
                <option value="iki|">Galler</option>
                <option value="dokuz|fbes">Gambiya</option>
                <option value="dokuz|fbes">Gana</option>
                <option value="dort|">Gaza Batı Seria</option>
                <option value="dokuz|">Gine</option>
                <option value="dokuz|">Gine Bissau</option>
                <option value="sekiz|fiki">Grenada</option>
                <option value="alti|fsekiz">Grönland</option>
                <option value="sekiz|fiki">Guadelup</option>
                <option value="dokuz|fbes">Guam</option>
                <option value="sekiz|fiki">Guatemela</option>
                <option value="dort|">Guernsey</option>
                <option value="sekiz|fiki">Guyana</option>
                <option value="yedi|fbes">Güney Afrika</option>
                <option value="dort|fbes">Gürcistan</option>
                <option value="sekiz|fiki">Haiti</option>
                <option value="dort|fon">Hırvatistan</option>
                <option value="alti|fdort">Hindistan</option>
                <option value="iki|falti">Hollanda</option>
                <option value="sekiz|fiki">Honduras</option>
                <option value="alti|fuc">Hong Kong</option>
                <option value="dort|fdort">Irak</option>
                <option value="sekiz|">İngiliz Virgin Adaları</option>
                <option value="iki|">İngiltere</option>
                <option value="iki|falti">İrlanda Cumhuriyeti</option>
                <option value="iki|">İskoçya</option>
                <option value="iki|falti">İspanya</option>
                <option value="dort|fdort">İsrail</option>
                <option value="uc|fsekiz">İsveç</option>
                <option value="iki|fdokuz">İsviçre</option>
                <option value="iki|falti">İtalya</option>
                <option value="alti|fdokuz">İzlanda</option>
                <option value="sekiz|fiki">Jamaika</option>
                <option value="alti|fuc">Japonya</option>
                <option value="dort|">Jersey</option>
                <option value="yedi|fuc">Komboçya</option>
                <option value="dokuz|fbes">Kamerun</option>
                <option value="bes|fbir">Kanada</option>
                <option value="alti|">Kanarya Adaları</option>
                <option value="dort|">Karadağ</option>
                <option value="dort|fdort">Katar</option>
                <option value="dort|fbes">Kazakistan</option>
                <option value="yedi|fbes">Kenya</option>
                <option value="dort|fyedi">Kıbrıs</option>
                <option value="dort|fbes">Kırgızistan</option>
                <option value="dokuz|">Kıribati</option>
                <option value="sekiz|fiki">Kolombiya</option>
                <option value="dokuz|">Komor</option>
                <option value="dokuz|fbes">Kongo</option>
                <option value="alti|fuc">Güney Kore</option>
                <option value="dort|">Kosova</option>
                <option value="sekiz|fiki">Kosta Rika</option>
                <option value="dort|fdort">Kuveyt</option>
                <option value="iki|falti">Kuzey İrlanda</option>
                <option value="dokuz|">Kuzey Mariana Adaları</option>
                <option value="yedi|">Laos</option>
                <option value="yedi|fbes">Lesoto</option>
                <option value="dort|">Letonya</option>
                <option value="dokuz|fbes">Liberya</option>
                <option value="alti|fdort">Libya</option>
                <option value="iki|fdokuz">Lihtenştayn</option>
                <option value="dort|fsekiz">Litvanya</option>
                <option value="dort|fdort">Lübnan</option>
                <option value="iki|falti">Lüksenburg</option>
                <option value="uc|fyedi">Macaristan</option>
                <option value="alti|fuc">Makao</option>
                <option value="dokuz|fbes">Madagaskar</option>
                <option value="uc|">Madelra</option>
                <option value="dort|fon">Makedonya</option>
                <option value="dokuz|">Malavi</option>
                <option value="dokuz|fuc">Maldiv Adaları</option>
                <option value="alti|fuc">Malezya</option>
                <option value="dokuz|fbes">Mali</option>
                <option value="uc|fyedi">Malta</option>
                <option value="dokuz|fbes">Marshall Adaları</option>
                <option value="bes|fiki">Meksika</option>
                <option value="dort|fdort">Mısır</option>
                <option value="alti|fuc">Moğolistan</option>
                <option value="dort|">Moldova</option>
                <option value="iki|falti">Monako</option>
                <option value="dokuz|fbes">Mozambik</option>
                <option value="yedi|">Myanmar</option>
                <option value="dokuz|fbes">Namibya</option>
                <option value="yedi|">Nepal</option>
                <option value="sekiz|">Neviş</option>
                <option value="dokuz|fbes">Niler</option>
                <option value="yedi|fbes">Nijerya</option>
                <option value="sekiz|fiki">Nikaragua</option>
                <option value="uc|fdokuz">Norveç</option>
                <option value="dokuz|fbes">Orta Afrika Cumhuriyeti</option>
                <option value="dort|fbes">Özbekistan</option>
                <option value="dort|fdort">Pakistan</option>
                <option value="dokuz|fbes">Palau</option>
                <option value="sekiz|fiki">Panama</option>
                <option value="dokuz|fbes">Papua Yeni Gine</option>
                <option value="sekiz|fiki">Paraguay</option>
                <option value="sekiz|fiki">Peru</option>
                <option value="uc|fdokuz">Polonya</option>
                <option value="dokuz|">Ponape</option>
                <option value="uc|fsekiz">Portekiz</option>
                <option value="bes|">Porto Riko</option>
                <option value="dokuz|fbes">Reunion</option>
                <option value="uc|fyedi">Romanya</option>
                <option value="dokuz|">Rota</option>
                <option value="dokuz|fbes">Ruanda</option>
                <option value="dort|fon">Rusya Posta Kodu</option>
                <option value="alti|fon">Rusya Diger</option>
                <option value="sekiz|">Saba</option>
                <option value="dokuz|">Salpan</option>
                <option value="dokuz|fbes">Samoa</option>
                <option value="dort|">San Marino</option>
                <option value="dokuz|">Sao Tome</option>
                <option value="dokuz|fbes">Senegal</option>
                <option value="dort|fon">Sırbistan</option>
                <option value="dokuz|">Sierra</option>
                <option value="alti|fuc">Singapur</option>
                <option value="uc|fyedi">Slovakya</option>
                <option value="uc|fyedi">Slovenya</option>
                <option value="dokuz|">Solomon Adalar</option>
                <option value="yedi|fdort">Sri Lanka</option>
                <option value="dort|fdort">Suudi Arabistan</option>
                <option value="yedi|">Swazliand</option>
                <option value="sekiz|fiki">Şili</option>
                <option value="dort|">Tacikistan</option>
                <option value="dokuz|">Tahiti</option>
                <option value="dokuz|fbes">Tanzanya</option>
                <option value="alti|fuc">Tayland</option>
                <option value="alti|fuc">Tayvan</option>
                <option value="dokuz|fbes">Togo</option>
                <option value="alti|fdort">Tunus</option>
                <option value="sekiz|fiki">Turk Calcos Adaları</option>
                <option value="dokuz">Tuvalu</option>
                <option value="dort|">Türkmenistan</option>
                <option value="dokuz|">Uganda</option>
                <option value="dort|fon">Ukrayna</option>
                <option value="dort|">Umman</option>
                <option value="sekiz|">Union Adası</option>
                <option value="sekiz|fiki">Uruguay</option>
                <option value="dort|">Ürdün</option>
                <option value="dokuz|fbes">Vanuatu</option>
                <option value="yedi|fuc">Vietnam</option>
                <option value="sekiz">Virgin Adaları ABD</option>
                <option value="sekiz|">Virgin Gorda İngiliz</option>
                <option value="dokuz|fbes">Walls ve Futuna Adaları</option>
                <option value="dokuz|fbes">Mikronezya Federal Devletler</option>
                <option value="dort|">Yemen Cumhuriyeti</option>
                <option value="dokuz|fbes">Yeni Kaledonya</option>
                <option value="yedi|fuc">Yeni Zellanda</option>
                <option value="iki|fyedi">Yunanistan</option>
                <option value="dokuz|fbes">Zambiya </option>
                <option value="dokuz|fbes">Zimbabve </option>





            </select>
            <div class="select_arrow">
    </div>
</div>

            
            <input type="submit"  value="Hesapla" class="btn btn-danger">
         
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