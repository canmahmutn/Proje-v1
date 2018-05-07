<?php include("Baglanti-baslik-up.php");  ?>
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
  <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
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
      z-index: 2;
      background-color: #fff;
      font-family: 'Acme', sans-serif;
      border-radius: 5px;
      word-wrap: break-word;
      font-size: 80%;
    }
    .yorum{
      width: 70%;
      margin: 0 auto;
      z-index: 2;
      font-family: 'Acme', sans-serif;
      background-color: #043A0A;
      color: #fff;
    }
    .yaz{
      padding-top: 20px;
      padding-bottom: 20px;
      text-align: center;
    }
    .icerik{
      padding-top: 20px;
      padding-left: 40px;
      padding-bottom: 30px;
      padding-right: 30px;
    }
    .head h1{
      margin-top: 0px;
      font-family: 'Oswald', sans-serif;
    }
    .inputs{
      padding-top: 6px;
      padding-bottom: 10px;
      width: 70%;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
      display: inline-block;
    }
    .submit{
      cursor: pointer;
      width: 20%;
      padding: 12px 20px;
      margin: 8px 0;
      border: none;
      color: #fff;
      font-size: 15px;
      text-align: center;
    }
    .submit:hover{
      background-color: #00BD4B;
    }
    .form1{
      margin-left: 25%;
    }
    .form2{
      margin-left: 45%;
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
            </ul>
          </li>
        </ul>
      </div>
    </div>

<div class="head">
  <?php
  include("Baglanti-baslik-up.php");
  $kidi =$_GET["mid"];
  $icerik = $db -> prepare("select * from baslik where konu_id=?");
  $icerik -> execute(array($kidi));
  $x=$icerik -> fetchALL(PDO::FETCH_ASSOC);

  foreach ($x as $m) {
    ?>
    <div class="icerik">
      <h1><?php echo $m["konu_baslik"]; ?></h1>
      <?php echo $m["konu_aciklama"]; ?>
      <p></p>
      <a href="#">Yazar: <?php echo $m["uye_name"]; ?>  </a>
      <span style="margin-left:50%;">Tarih: <?php echo $m["update_tarih"]; ?> </span>
    </div>
    <?php
  }
   ?>

</div>
<div class="yorum">
  <div class="yaz">
    Yorum yap
  </div>
  <form class="form1" action="index.html" method="post">
    <textarea name="name" rows="8" cols="80" class="inputs" placeholder="Bir şeyler yaz..."></textarea>
  </form>
  <form class="form2" action="index.html" method="post">
    <input class="submit" type="submit" name="" value="Paylaş">
  </form>

</div>


    <div class="clear"></div>
  </body>
</html>
