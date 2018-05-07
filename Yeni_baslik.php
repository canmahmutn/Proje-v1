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
      padding-top: 50px;
      width: 70%;
      margin: 0 auto;
      z-index: 2;
    }
    .head-l1{
      float:left;
      width: 70%;
      padding-left: 63px;
    }
    .head-r{
      float: left;
      z-index: 2;
      background-color: #fff;
      border: 5px #043A0A solid;
      border-radius: 4px;
      height: 265px;
      width: 100px;
      margin-left: 10px;
    }
    .inputs{
        width: 100%;
        padding: 12px 20px;
        margin: 7px 0;
        display: block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }
    .inputs2{
        margin-left: 10px;
    }

    .submit{
      cursor: pointer;
      padding: 12px 20px;
      margin: 0 auto;
      width: 100%;
      display: inline-block;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
      color: #fff;
      background-color: gray;
      font-size: 15px;
    }
    .submit:hover{
      background-color: #00BD4B;
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
<div class="head">

    <form class="head-l" action="Baslik_ekle.php" method="post">
      <div class="head-l1">
        <input autocomplete="off" class="inputs" maxlength="80" type="text" name="baslik" value="" placeholder="Başlık">
        <textarea class="inputs" name="aciklama" rows="9" cols="80" placeholder="Yazmak istediklerin"></textarea>
        <input class="submit" type="submit" name="tamamla" value="Tamamla">
      </div>
      <div class="head-r">
        <input class="inputs2" type="radio" name="ktgr" value="Gündem">Gündem<br>
        <input class="inputs2" type="radio" name="ktgr" value="Eğlence">Eğlence<br>
        <input class="inputs2" type="radio" name="ktgr" value="Edebiyat">Edebiyat<br>
        <input class="inputs2" type="radio" name="ktgr" value="Şaka">Şaka<br>
        <input class="inputs2" type="radio" name="ktgr" value="Film">Film<br>
        <input class="inputs2" type="radio" name="ktgr" value="Müzik">Müzik<br>
        <input class="inputs2" type="radio" name="ktgr" value="Korku">Korku<br>
        <input class="inputs2" type="radio" name="ktgr" value="Bilim">Bilim<br>
        <input class="inputs2" type="radio" name="ktgr" value="Sanat">Sanat<br>
        <input class="inputs2" type="radio" name="ktgr" value="Uzay">Uzay<br>
        <input class="inputs2" type="radio" name="ktgr" value="Spor">Spor<br>
        <input class="inputs2" type="radio" name="ktgr" value="Yiyecek">Yiyecek<br>
        <input class="inputs2" type="radio" name="ktgr" value="Rastgele">Rastgele<br>
      </div>

    </form>

</div>



  </body>
</html>
