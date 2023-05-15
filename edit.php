<?php
require_once 'koneksi.php';

$nisn = $_GET['nisn'];

$sql = "SELECT * FROM data_siswa WHERE nisn = '$nisn'";

$stat = $koneksi->prepare($sql);

$stat->execute();


$siswa = $stat->fetchAll(PDO::FETCH_ASSOC)[0];

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Input Database</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
  <div class="container mt-4">
    <div class="row mb-4 mt-6">
      <h1>Ubah Data Siswa</h1>
    </div>
    <div class="row">
      <div class="col-8">
        <form action="update.php" method="POST">
          <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">NISN</span>
            <input type="number" class="form-control" name="nisn" placeholder="NISN" aria-label="NISN" aria-describedby="basic-addon1" value="<?= $siswa['nisn'] ?>" required>
          </div>
          <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Nama</span>
            <input type="text" class="form-control" name="nama" placeholder="Nama" aria-label="Nama" aria-describedby="basic-addon1" value="<?= $siswa['nama'] ?>" required>
          </div>
          <select class="form-select mb-3" required name="kompetensi_keahlian" aria-label="Default select example">
            <option selected disabled>- Pilih Kompetensi Keahlian -</option>
            <option value="SIJA" <?php if ($siswa['kompetensi'] === "SIJA") {
                                    echo "selected";
                                  } ?>>SIJA</option>
            <option value="KGSP" <?php if ($siswa['kompetensi'] === "KGSP") {
                                    echo "selected";
                                  } ?>>KGSP</option>
            <option value="TMPO" <?php if ($siswa['kompetensi'] === "TMPO") {
                                    echo "selected";
                                  } ?>>TMPO</option>
            <option value="TTL" <?php if ($siswa['kompetensi'] === "TTL") {
                                  echo "selected";
                                } ?>>TTL</option>
            <option value="TEDK" <?php if ($siswa['kompetensi'] === "TEDK") {
                                    echo "selected";
                                  } ?>>TEDK</option>
            <option value="KJIJ" <?php if ($siswa['kompetensi'] === "KJIJ") {
                                    echo "selected";
                                  } ?>>KJIJ</option>
            <option value="TFLM" <?php if ($siswa['kompetensi'] === "TFLM") {
                                    echo "selected";
                                  } ?>>TFLM</option>
            <option value="TME" <?php if ($siswa['kompetensi'] === "TME") {
                                  echo "selected";
                                } ?>>TME</option>
          </select>
          <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Alamat</span>
            <input type="text" class="form-control" required name="alamat" placeholder="Alamat" aria-label="Alamat" aria-describedby="basic-addon1" value="<?= $siswa['alamat'] ?>">
          </div>
          <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Telepon</span>
            <input type="text" class="form-control" required name="telepon" placeholder="Telepon" aria-label="Telepon" aria-describedby="basic-addon1" value="<?= $siswa['telepon'] ?>">
          </div>
          <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Hobi</span>
            <input type="text" class="form-control" required name="hobi" placeholder="Hobi" aria-label="Hobi" aria-describedby="basic-addon1" value="<?= $siswa['hobi'] ?>">
          </div>
          <div class="d-flex gap-3">
            <button class="btn btn-primary" type="submit">Submit</button>
            <button class="btn btn-danger" type="reset">Reset</button>
            <a class="btn btn-warning" href="view_data.php">View Data</a>
          </div>
        </form>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>