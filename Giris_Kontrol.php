<?php
include("Baglanti-kayit.php");
session_start();

$email=trim($_POST["email"]);
$sifre=trim(md5($_POST["sifre"]));

if (!$email || !$sifre) {
  ?>
  <script type="text/javascript">
    alert("Lütfen boş alan bırakmayınız");
  </script>
  <meta http-equiv="refresh" content="0; url=Giris.html">
  <?php
}
else {
$uye = $db->prepare("select * from uye_kayit where email=? and sifre=?");
$uye->execute(array($email,$sifre));
$z = $uye->fetch(PDO::FETCH_ASSOC);
$x = $uye->rowCount();
    if ($x) {
      $_SESSION["ad"] = $z["ad"];
      $_SESSION["soyad"] = $z["soyad"];
      $_SESSION["id"] = $z["uye_id"];
      header("Location:Ana_Sayfa.php");
    }
    else {
      ?>
      <script type="text/javascript">
        alert("Email veya şifre yanlış!");
      </script>
      <meta http-equiv="refresh" content="0; url=Giris.html">
      <?php
    }
}
?>
