<?php

require_once 'koneksi.php';

$nisn = $_POST['nisn'];
$nama = $_POST['nama'];
$kompetensi_keahlian = $_POST['kompetensi_keahlian'];
$alamat = $_POST['alamat'];
$telepon = $_POST['telepon'];
$hobi = $_POST['hobi'];

$sql = "SELECT nisn FROM data_siswa WHERE nisn = '$nisn'";

$stat = $koneksi->prepare($sql);
$stat->execute();

if ($stat->rowCount() > 0) {
  echo "<script>alert('NISN sudah ada!'); window.location.href='index.php';</script>";
  exit;
}

$sql = "INSERT INTO data_siswa (nisn, nama, kompetensi, alamat, telepon, hobi) VALUES (?,?,?,?,?,?)";

// var_dump($koneksi);
$stat = $koneksi->prepare($sql);
$stat->bindParam(1, $nisn);
$stat->bindParam(2, $nama);
$stat->bindParam(3, $kompetensi_keahlian);
$stat->bindParam(4, $alamat);
$stat->bindParam(5, $telepon);
$stat->bindParam(6, $hobi);

$stat->execute();

echo "<script>alert('Data berhasil ditambahkan!'); window.location.href='index.php';</script>";
