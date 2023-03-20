<?php

$host = "localhost";
$db_name = "db_siswa";
$user = "root";
$pass = "";

try {
  $koneksi = new PDO("mysql:host=$host;dbname=$db_name", $user, $pass);
  $koneksi->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
  echo "Koneksi Gagal, Pesan: " . $e->getMessage();
}

// $koneksi = null;
