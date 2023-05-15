<?php

require_once 'koneksi.php';

$sql = "SELECT * FROM data_siswa ORDER BY nisn ASC";

$stat = $koneksi->prepare($sql);

$stat->execute();

$data = $stat->fetchAll(PDO::FETCH_ASSOC);

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>View Data Siswa</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
  <div class="container mt-4">
    <div class="d-flex justify-content-between mb-4">
      <h1 class="">Data Siswa</h1>
      <a href="/" class="text-decoration-none">Buat Data</a>
    </div>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">NISN</th>
          <th scope="col">Nama</th>
          <th scope="col">Kompetensi Keahlian</th>
          <th scope="col">Alamat</th>
          <th scope="col">Telepon</th>
          <th scope="col">Hobi</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($data as $index => $siswa) : ?>
          <tr>
            <th scope="row"><?= $index + 1 ?></th>
            <td><?= $siswa['nama'] ?></td>
            <td><?= $siswa['nisn'] ?></td>
            <td><?= $siswa['kompetensi'] ?></td>
            <td><?= $siswa['alamat'] ?></td>
            <td><?= $siswa['telepon'] ?></td>
            <td><?= $siswa['hobi'] ?></td>
            <td><a href="edit.php?nisn=<?= $siswa['nisn'] ?>" class="btn btn-warning btn-sm">Edit</a><a href="delete.php" class="btn btn-sm btn-danger mx-2">Delete</a></td>
          </tr>
        <?php endforeach ?>
      </tbody>
    </table>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>