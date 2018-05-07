<?php
    $host = "localhost";
    $vt_adi = "baslik-update";
    $user = "root";
    $pass = "";

    try {
        $db = new PDO("mysql:host=$host;dbname=$vt_adi;charset=UTF8","$user","$pass");
    }
    catch ( PDOException $e ) {
        print $e->getMessage();
        $db = null;
    }
    date_default_timezone_set('Europe/Istanbul');
    return $db;

?>
