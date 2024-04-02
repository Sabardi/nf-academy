<?php
include 'class.php';

if($_SERVER['REQUEST_METHOD']== "POST"){

// Ambil data dari form HTML
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$universitas = $_POST['universitas'];
$matakuliah = $_POST['matakuliah'];
$nilai = $_POST['nilai'];

// Instansiasi objek Mahasiswa
$mahasiswa = new Mahasiswa($nim, $nama, $universitas, $matakuliah, $nilai);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Mahasiswa</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
  <h2 class="mb-4">Daftar Mahasiswa</h2>
  <a href="index.php" class="btn btn-primary">Kembali</a>
  <table class="table table-bordered table-striped">
    <thead class="thead-dark">
      <tr>
        <th scope="col">NIM</th>
        <th scope="col">Nama</th>
        <th scope="col">Universitas</th>
        <th scope="col">Mata Kuliah</th>
        <th scope="col">Nilai</th>
        <th scope="col">Grade</th>
        <th scope="col">Predikat</th>
        <th scope="col">Status</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?= $mahasiswa->nim ?></td>
        <td><?= $mahasiswa->nama ?></td>
        <td><?= $mahasiswa->universitas ?></td>
        <td><?= $mahasiswa->matakuliah ?></td>
        <td><?= $mahasiswa->nilai ?></td>
        <td><?= $mahasiswa->grade() ?></td>
        <td><?= $mahasiswa->predikat($mahasiswa->grade()) ?></td>
        <td><?= $mahasiswa->status() ?></td>
      </tr>
      <!-- Tambahkan baris data lainnya sesuai kebutuhan -->
    </tbody>
  </table>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
<?php } ?>