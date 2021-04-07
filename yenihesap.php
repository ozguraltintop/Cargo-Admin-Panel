<!DOCTYPE html>
<html lang="en">
<head>
    <style>
            html {
        height: 100%;
        }
        body {
        margin:0;
        padding:0;
        font-family: sans-serif;
        background: linear-gradient(#141e30, #243b55);
        }

        .login-box {
        position: absolute;
        top: 50%;
        left: 50%;
        width: 400px;
        padding: 40px;
        transform: translate(-50%, -50%);
        background: rgba(0,0,0,.5);
        box-sizing: border-box;
        box-shadow: 0 15px 25px rgba(0,0,0,.6);
        border-radius: 10px;
        }

        .login-box h2 {
        margin: 0 0 30px;
        padding: 0;
        color: #fff;
        text-align: center;
        }

        .login-box .user-box {
        position: relative;
        }

        .login-box .user-box input {
        width: 100%;
        padding: 10px 0;
        font-size: 16px;
        color: #fff;
        margin-bottom: 30px;
        border: none;
        border-bottom: 1px solid #fff;
        outline: none;
        background: transparent;
        }
        .login-box .user-box label {
        position: absolute;
        top:0;
        left: 0;
        padding: 10px 0;
        font-size: 16px;
        color: #fff;
        pointer-events: none;
        transition: .5s;
        }

        .login-box .user-box input:focus ~ label,
        .login-box .user-box input:valid ~ label {
        top: -20px;
        left: 0;
        color: #03e9f4;
        font-size: 12px;
        }

        .login-box form a {
        position: relative;
        display: inline-block;
        padding: 10px 20px;
        color: #03e9f4;
        font-size: 16px;
        text-decoration: none;
        text-transform: uppercase;
        overflow: hidden;
        transition: .5s;
        margin-top: 40px;
        letter-spacing: 4px
        }

        .login-box a:hover {
        background: #03e9f4;
        color: #fff;
        border-radius: 5px;
        box-shadow: 0 0 5px #03e9f4,
                    0 0 25px #03e9f4,
                    0 0 50px #03e9f4,
                    0 0 100px #03e9f4;
        }

        .login-box a span {
        position: absolute;
        display: block;
        }

        .login-box a span:nth-child(1) {
        top: 0;
        left: -100%;
        width: 100%;
        height: 2px;
        background: linear-gradient(90deg, transparent, #03e9f4);
        animation: btn-anim1 1s linear infinite;
        }

        @keyframes btn-anim1 {
        0% {
            left: -100%;
        }
        50%,100% {
            left: 100%;
        }
        }

        .login-box a span:nth-child(2) {
        top: -100%;
        right: 0;
        width: 2px;
        height: 100%;
        background: linear-gradient(180deg, transparent, #03e9f4);
        animation: btn-anim2 1s linear infinite;
        animation-delay: .25s
        }

        @keyframes btn-anim2 {
        0% {
            top: -100%;
        }
        50%,100% {
            top: 100%;
        }
        }

        .login-box a span:nth-child(3) {
        bottom: 0;
        right: -100%;
        width: 100%;
        height: 2px;
        background: linear-gradient(270deg, transparent, #03e9f4);
        animation: btn-anim3 1s linear infinite;
        animation-delay: .5s
        }

        @keyframes btn-anim3 {
        0% {
            right: -100%;
        }
        50%,100% {
            right: 100%;
        }
        }

        .login-box a span:nth-child(4) {
        bottom: -100%;
        left: 0;
        width: 2px;
        height: 100%;
        background: linear-gradient(360deg, transparent, #03e9f4);
        animation: btn-anim4 1s linear infinite;
        animation-delay: .75s
        }

        @keyframes btn-anim4 {
        0% {
            bottom: -100%;
        }
        50%,100% {
            bottom: 100%;
        }
        }
        .buttonx {  
            color:white;   
    background-color: Transparent;
    background-repeat:no-repeat;
    border: none;
    cursor:pointer;
    overflow: hidden;        
}

    </style>
</head>
<body>
<div class="login-box">
  <h2>Turkey Cargo Calculate</h2>
  <form action="yenihesap2.php" method="POST">
    <div class="user-box">
      <input type="text" name="enx" required="">
      <label>En</label>
    </div>
    <div class="user-box">
      <input type="text" name="boyx" required="">
      <label>Boy</label>
    </div>
    <div class="user-box">
      <input type="text" name="yukseklikx" required="">
      <label>Yukseklik</label>
    </div>
    <div class="user-box">
      <input type="text" name="agirlikx" required="">
      <label>Agirlik</label>
    </div>


    <div class="select">
            <select id="sehir" name="secimimx" class="boxx" id="buttonx">
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
    <a href="yenihesap2.php">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <input type="submit" value="CALCULATE" class="buttonx">    </a>
    
  </form>
</div>
</body>
</html>
