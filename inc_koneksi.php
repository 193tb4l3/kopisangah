<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "kopi_sangah_asli_barokah";

//try {
    $koneksi = new PDO("mysql:host=$host;dbname=$database;charset=utf8", $username, $password, array(PDO::ATTR_EMULATE_PREPARES => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
//} catch (PDOException $e) {
//    die("Koneksi gagal: " . $e->getMessage());}
$db = mysqli_connect($host, $username, $password, $database);

if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}
?>