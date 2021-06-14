<?php
error_reporting(0);
session_start();
ob_start();

/* Veritabanı Baglantı Bilgileri */
$hostname = "127.0.0.1";
$username = "root";
$pass = "1234";
$database = "uye_db";

/* MySQL Bağlantısı */
try {
    $db = new PDO("mysql:host=" . $hostname . "; dbname=" . $database . "; charset=utf8", "$username", "$pass");
} catch (PDOException $error) {
    print $error->getMessage();
    exit();
}


?>

