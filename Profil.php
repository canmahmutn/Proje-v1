<?php
include("Baglanti-baslik-up.php");
session_start();
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ana Sayfa</title>
  </head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Croissant+One" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Acme" rel="stylesheet">
  <script type="text/javascript">
    $(document).ready(function(){
      $(".drop").click(function(){
        $(".dropp").slideToggle("fast");
      });
      $("#kullanici").focus();
      $("#kullanici").click(function(){
        $(".sfre").hide();
        $(".klnc").show();
        $(".msj").hide();
        $(".bslk").hide();
        $(".yrm").hide();
      });
      $("#sifre").click(function(){
        $(".sfre").show();
        $(".klnc").hide();
        $(".msj").hide();
        $(".bslk").hide();
        $(".yrm").hide();
      });
      $("#mesaj").click(function(){
        $(".sfre").hide();
        $(".klnc").hide();
        $(".msj").show();
        $(".bslk").hide();
        $(".yrm").hide();
      });
      $("#baslik").click(function(){
        $(".sfre").hide();
        $(".klnc").hide();
        $(".msj").hide();
        $(".bslk").show();
        $(".yrm").hide();
      });
      $("#yorum").click(function(){
        $(".sfre").hide();
        $(".klnc").hide();
        $(".msj").hide();
        $(".bslk").hide();
        $(".yrm").show();
      });
    });
  </script>
  <style media="screen">
    body{
      margin: 0;
      padding: 0;
      background-color: #9ea2a8;
    }

    /*Navigation*/
    .nav-l{
      float: left;
    }
    .nav-r{
      float: right;
      margin-right: 3.5%;
    }
    .navigation{
      width: 70%;
      height: 55px;
      margin: 0 auto;
      background-color: #043A0A;
      border-bottom-left-radius: 5px;
      border-bottom-right-radius: 5px;
    }
    li{
      list-style-type: none;
    }
    a{
      text-decoration: none;
    }
    a:hover{
      color: #06F41F;
    }

    .navigation a{
      color: #fff;
      font-family: 'Croissant One', cursive;
    }
    .navigation a:hover{
      color: #06F41F;
    }
    .dropp{
      display: none;
      background-color: #043A0A;
      width: 80px;
      padding-left: 10px;
      position: fixed;
      z-index: 1;
    }
    /*Head*/
    .head{
      width: 70%;
      margin: 0 auto;
    }
    .head-l{
      padding-top: 15px;
      float: left;
      width: 25%;
      z-index: 2;
    }
    .head-l a{
      color : #fff;
      background-color:#043A0A;
      padding: 10px;
      display: block;
      border-radius: 5px;
      margin: 10px 0 10px 0;
      outline: none;
    }
    .head-l a:hover{
      background-color: #06F41F;
    }
    .head-l a:focus{
      background-color: #06F41F;
    }
    .head-r{
      float: right;
      width: 70%;
      background-color: #fff;
      z-index: 2;
      margin-top: 24px;
      border: 5px #043A0A solid;
      border-radius: 4px;
      height: 221px;
      font-family: 'Acme', sans-serif;
    }
    .head-r a{
      display: block;
      text-align: center;
      padding-top: 10px;
    }
    .pass{
      margin: 0 auto;
      margin-top: 17px;
      padding: 7px 30px 7px 5px;
      display: block;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
      outline: none;
    }
    .enter{
      cursor: pointer;
      padding: 8px 30px 8px 30px;
      margin: 0 auto;
      margin-top: 10px;
      display: block;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
      color: #fff;
      background-color: gray;
      font-size: 15px;
      outline: none;
    }
    .enter:hover{
      background-color: #00BD4B;
    }
    .klnc{
      padding-left: 20px;
    }
    .sfre{
      display: none;
    }
    .msj{
      display: none;
    }
    .bslk{
      display: none;
    }
    .yrm{
      display: none;
    }
    /*Clear*/
    .clear{
      clear: both;
    }
  </style>
  <body>
    <div class="navigation">
      <div class="nav-l">
        <ul>
          <li><a href="Ana_Sayfa.php">Ana Sayfa</a></li>
        </ul>
      </div>
      <div class="nav-r">
        <ul>
          <li><a href="#" class="drop"><i class="fa fa-align-justify"></i>Kategori</a>
            <ul class="dropp">
              <li><a href="#">Gündem</a></li>
              <li><a href="#">Eğlence</a></li>
              <li><a href="#">Edebiyat</a></li>
              <li><a href="#">Şaka</a></li>
              <li><a href="#">Film</a></li>
              <li><a href="#">Müzik</a></li>
              <li><a href="#">Korku</a></li>
              <li><a href="#">Bilim</a></li>
              <li><a href="#">Sanat</a></li>
              <li><a href="#">Uzay</a></li>
              <li><a href="#">Spor</a></li>
              <li><a href="#">Yiyecek</a></li>
              <li><a href="#">Rastgele</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>

<div class="head">
    <div class="head-l">
      <a href="#" id="kullanici">Kullanıcı bilgileri</a>
      <a href="#" id="sifre">Şifre değiştir</a>
      <a href="#" id="mesaj">Mesaj kutusu</a>
      <a href="#" id="baslik">Başlıklar</a>
      <a href="#" id="yorum">Yorumlar</a>
    </div>
    <div class="head-r">
      <div class="klnc">
        <?php
        $klad=$_SESSION["ad"];
        $klsoyad=$_SESSION["soyad"];

        include("Baglanti-kayit.php");
        $konu = $db -> prepare("select * from uye_kayit where ad='{$klad}' and soyad='{$klsoyad}'");
        $konu -> execute(array());
        $x = $konu -> fetchALL(PDO::FETCH_ASSOC);
        foreach ($x as $m) {
          ?>
          <p>Ad: <?php echo $m["ad"]; ?> </p>
          <p>Soyad: <?php echo $m["soyad"]; ?></p>
          <p>Kayıt tarihi:  <?php echo $m["kayit_tarih"]; ?></p>
          <p>Açılmış başlık sayısı:<?php echo $m["baslik"]; ?></p>
          <p>Yapılmış yorum sayısı:<?php echo $m["yorum"]; ?></p>

          <?php
        }
         ?>

      </div>
      <div class="sfre">
        <form class="form1" action="Sifre_degisim.php" method="post">
          <input class="pass" type="password" name="eskisifre" placeholder="Eski şifre">
          <input class="pass" type="password" name="yenisifre" placeholder="Yeni şifre">
          <input class="pass" type="password" name="yenisifretkr" placeholder="Yeni şifre tekrar">
          <input class="enter" type="submit" name="Şifre değiştir" value="Şifre değiştir">
        </form>
      </div>
      <div class="msj">

      </div>
      <div class="bslk">

      </div>
      <div class="yrm">

      </div>
    </div>
</div>


    <div class="clear"></div>
  </body>
</html>
