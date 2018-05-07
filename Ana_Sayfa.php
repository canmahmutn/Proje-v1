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
      z-index: 1;
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
      position: absolute;
      display: none;
      background-color: #043A0A;
      width: 80px;
      padding-left: 10px;
      z-index: 1;
    }
    /*Head*/
    .head{
      width: 70%;
      margin: 0 auto;
    }
    .head-l{
      padding-top: 10px;
      float: left;
      width: 70%;
      z-index: 2;
    }
    .head-r{
      width: 25%;
      float: right;
      margin-top: 9px;
      z-index: 2;
      background-color: #fff;
      border: 5px #043A0A solid;
      border-radius: 4px;
      height: 100px;
      font-family: 'Acme', sans-serif;
    }
    .head-r a{
      display: block;
      text-align: center;
      padding-top: 10px;
    }
    .blm-1{
      word-wrap: break-word;
    }
    .blm-1 a{
      color: black;
    }
    .blm-1 a:hover{
      color: #06F41F;
    }
    .blm-2{
      margin-top: 11px;
    }
    .blm-2 a{
      color: black;
    }
    .blm-2 a:hover{
      color: #06F41F;
    }
    .blm-3{
      margin-top: 30px;
      border-radius: 4px;
      background-color: #043A0A;
      text-align: center;
      padding: 0 0 10px 0;
    }
    .blm-3 a{
      color: #fff;
    }
    .blm-3:hover{
      background-color: #06F41F;
      cursor: pointer;
    }
    .baslik{
      border-radius: 5px;
      font-family: 'Acme', sans-serif;
      background-color: #fff;
      padding: 13px 8px 8px 30px;
      color: #000000;
      word-wrap: break-word;
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
              <li><a href="#">Felsefe</a></li>
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
<?php
$do = @$_GET["do"];
switch ($do) {
  case 'devam':
    ?>
    <meta http-equiv="refresh" content="0; url=okunan_sayfa.php">
    <?php
    break;
}

 ?>
<div class="head">
  <div class="head-r">
    <?php if ($_SESSION) {
      ?>
      <div class="blm-1">
          <a href="Profil.php"><?php echo $_SESSION["ad"];?></a>
          <a href="#">Mesaj kutusu</a>
          <a href="Cikis.php">Çıkış</a>
      </div>
      <div class="blm-3">
          <a href="Yeni_baslik.php" class="bslk">Başlık Oluştur</a>
      </div>
      <?php

    }
    else {
      ?>
      <div class="blm-2">
          <a href="Giris.html">Giriş yap</a>
          <a href="Giris.html">Kayıt ol</a>
      </div>
      <?php
    }

     ?>

  </div>

  <?php
  include("Baglanti-baslik-up.php");
  $konu = $db -> prepare("select * from baslik");
  $konu -> execute(array());
  $x = $konu -> fetchALL(PDO::FETCH_ASSOC);
  foreach ($x as $m) {
    ?>
      <div class="head-l">
        <div class="baslik">
          <?php $kid = $m["konu_id"]; ?>
          <a href="okunan_sayfa.php?mid= <?php echo "$kid"; ?>" style="font-weight:bold;"> <?php echo $m["konu_baslik"]; ?><br> <span style="font-weight: lighter;"> <?php echo substr($m["konu_aciklama"],0,62); ?>... </span> </a>
          <p style="font-size:80%; padding-top:5px;">Kategori: <?php echo $m["konu_kategori"]; ?> <span style="padding-left:57%">Tarih: <?php echo $m["update_tarih"]; ?> </span> </p>
        </div>
      </div>
    <?php

  }
   ?>


</div>



  </body>
</html>
