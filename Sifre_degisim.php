<?php
session_start();
include("Baglanti-kayit.php");
$esk = $_POST["eskisifre"];
$esksifre = md5(trim($esk));
$ynsifre = trim($_POST["yenisifre"]);
$ynsifretk = trim($_POST["yenisifretkr"]);
$uye_ad = $_SESSION["ad"];
$uye_soyad = $_SESSION["soyad"];
$uye_id = $_SESSION["id"];
if ($ynsifre != $ynsifretk) {
  ?>
    <script type="text/javascript">
      alert("Lütfen yeni şifrenizi doğru girin");
    </script>
    <meta http-equiv="refresh" content="0; url=Profil.php">
  <?php
}
else{
  $sfr = $db -> prepare("select * from uye_kayit where uye_id='{$uye_id}'");
  $sfr -> execute(array());
  $x = $sfr -> fetchALL(PDO::FETCH_ASSOC);
  foreach ($x as $m) {
    $sifr = $m["sifre"];
  }

  if ($sifr == $esksifre) {

      $ynsifrem=md5($ynsifre);
      $uye = $db -> prepare("UPDATE uye_kayit SET sifre=? where uye_id=?");
      $uye -> execute(array("$ynsifrem","$uye_id"));
      ?>
      <script type="text/javascript">
        alert("Şifreniz Başarıyla Değiştirildi");
      </script>
      <meta http-equiv="refresh" content="0; url=Profil.php">
      <?php
  }
  else {
    ?>
    <script type="text/javascript">
      alert("Şifre Hatalı!");
    </script>
    <meta http-equiv="refresh" content="0; url=Profil.php">
    <?php
  }
}




 ?>
