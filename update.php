<?php

require_once 'koneksi.php';

$nisn = $_POST['nisn'];
$nama = $_POST['nama'];
$kompetensi_keahlian = $_POST['kompetensi_keahlian'];
$alamat = $_POST['alamat'];
$telepon = $_POST['telepon'];
$hobi = $_POST['hobi'];

$sql = "UPDATE data_siswa SET nisn=?, nama=?, kompetensi=?, alamat=?, telepon=?, hobi=? WHERE nisn = '$nisn'";

$stat = $koneksi->prepare($sql);
$stat->bindParam(1, $nisn);
$stat->bindParam(2, $nama);
$stat->bindParam(3, $kompetensi_keahlian);
$stat->bindParam(4, $alamat);
$stat->bindParam(5, $telepon);
$stat->bindParam(6, $hobi);

$stat->execute();

echo "<script>alert('Data berhasil diubah!'); window.location.href='index.php';</script>";
