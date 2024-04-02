<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Input Data Mahasiswa</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
  <h2>Form Input Data Mahasiswa</h2>
  <form action="table.php?aksi=kirim" method="post">
    <div class="form-group">
      <label for="nim">NIM:</label>
      <input type="text" class="form-control" name="nim" id="nim" placeholder="Masukkan NIM" required>
    </div>
    <div class="form-group">
      <label for="nama">Nama:</label>
      <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama" required>
    </div>
    <div class="form-group">
      <label for="universitas">Universitas:</label>
      <select class="form-control" name="universitas" id="universitas" required>
        <option value="">Pilih Universitas</option>
        <option value="Universitas A">Universitas </option>
        <option value="Universitas B">Universitas B</option>
        <option value="Universitas C">Universitas C</option>
        <!-- Tambahkan opsi universitas lainnya sesuai kebutuhan -->
      </select>
    </div>
    <div class="form-group">
      <label for="matakuliah">Mata Kuliah:</label>
      <select class="form-control" name="matakuliah" id="matakuliah" required>
        <option value="">Pilih Mata Kuliah</option>
        <option value="Matematika">Matematika</option>
        <option value="Fisika">Fisika</option>
        <option value="Kimia">Kimia</option>
        <!-- Tambahkan opsi mata kuliah lainnya sesuai kebutuhan -->
      </select>
    </div>
    <div class="form-group">
      <label for="nilai">Nilai:</label>
      <input type="number" class="form-control" name="nilai" id="nilai" placeholder="Masukkan Nilai" min="0" max="100" required>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
