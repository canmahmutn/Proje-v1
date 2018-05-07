<?php
include("Baglanti-kayit.php");

$ad = trim($_POST['ad']);
$soyad = trim($_POST['soyad']);
$email = trim($_POST['email']);
$sifre = trim($_POST['sifre']);
$sifre_tekrar = trim($_POST['sifre_tekrar']);
$md5_sifre = md5($sifre);

if ($sifre == $sifre_tekrar) {
  $query = $db->prepare("INSERT INTO uye_kayit SET
  ad = ?,
  soyad = ?,
  email = ?,
  sifre = ?");
  $insert = $query->execute(array(
       "$ad", "$soyad", "$email", "$md5_sifre"
  ));
  if ( $insert ){
      $last_id = $db->lastInsertId();
      ?>
      <script type="text/javascript">
        alert("Kayıt Başarılı!");
      </script>
      <?php
      echo '<meta HTTP-EQUIV="REFRESH" content="0; url=Ana_Sayfa.php">';
  }
}
else {
      ?>
      <script type="text/javascript">
        alert("Şifreler uyuşmuyor!");
      </script>
      <?php
      echo '<meta HTTP-EQUIV="REFRESH" content="0; url=Giris.html">';
}
?>
