<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "buknisa";

$link = new mysqli($servername, $username, $password, $dbname);

if ($link->connect_error) {
  die("Koneksi ke database gagal: " . $link->connect_error);
}
?>
