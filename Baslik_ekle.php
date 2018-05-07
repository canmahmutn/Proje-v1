<?php
include("Baglanti-baslik-up.php");
session_start();
$baslik = $_POST["baslik"];

$aciklama = $_POST["aciklama"];
$tamamla = $_POST["tamamla"];
$kategori = $_POST["ktgr"];
header("Location: Ana_Sayfa.php");
$quest = $db -> prepare("INSERT INTO baslik SET uye_name=?, konu_baslik=?, konu_aciklama=?, konu_kategori=?");
$insert = $quest -> execute(array($_SESSION["ad"],$baslik, $aciklama, $kategori));




 ?>
