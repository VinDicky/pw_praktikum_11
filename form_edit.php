<!DOCTYPE html>
<html>
<head>
<title>Edit Mahasiswa</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container">
<h1 class="mt-4 mb-4">Edit Mahasiswa</h1>
<?php
// Koneksi ke database
include "koneksi.php";
// Mendapatkan data mahasiswa berdasarkan ID
$id = $GET['id'];
$sql = "SELECT FROM mahasiswa WHERE id='$id";
$result = mysqli_query($link, $sql);
$data = mysqli_fetch_assoc($result);
?>
<form method="POST" action="aksi_edit.php">
<input type="hidden" name="id" value="<?php echo $data['id']; ?>">
<div class="mb-3">
<label for="nim" class="form-label">NIM</label>
<input type="text" class="form-control" id="nim" name="nim" value="<?php echo $data['nim']; ?>" required>
</div>
<div class="mb-3">
<label for="nama" class="form-label">Nama</label> <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $data['nama']; ?>" required>
</div>
<div class="mb-3">
<label for="no_hp" class="form-label">No HP</label>
<input type="text" class="form-control" id="no_hp" name="no_hp" value="<?php echo $data['no_hp']; ?>" required>
</div>
<div>
    <label for="nim" class="form-label">NIM</label>
    <input type="text" class="form-control" id="nim" name="nim" value="<?php echo $data['nim']; ?>" required>
</div>
<div class="mb-3">
<label for="nama" class="form-label">Nama</label>
<input type="text" class="form-control" id="nama" name="nama" value="<?php echo $data['nama']; ?>" required>
</div>
<div class="mb-3">
<label for="no_hp" class="form-label">No HP</label>
<input type="text" class="form-control" id="no_hp" name="no_hp" value="<?php echo $data['no_hp']; ?>" required>
</div>
<div class="mb-3">
<label for="jenis kelamin" class="form-label">Jenis Kelamin</label> <select class="form-select" id="jenis kelamin" name="jenis kelamin" required>
<option value="Laki-laki" <?php if ($data['jenis kelamin'] === 'Laki-laki') echo 'selected'; ?>>Laki-laki</option>
<option value="Perempuan" <?php if ($data['jenis kelamin'] === 'Perempuan') echo 'selected'; ?>>Perempuan</option>
</select>
</div>
<div class="mb-3">
<label for="jurusan" class="form-label">Jurusan</label>
<select class="form-select" id="jenis_kelamin" name="jurusan" required>
<option value="Informatika" <?php if ($data['jurusan'] = 'Informatika') echo 'selected'; ?>>Informatika</option> <option value="Sistem Informasi" <?php if ($data['jurusan'] === 'Sistem Informasi') echo 'selected'; ?>>Sistem Informasi</option>
</select>
</div>
<div class="mb-3">
<label for="alamat" class="form-label">Alamat</label>
<textarea class="form-control" id="alamat" name="alamat" rows="3" required> <?php echo $data['alanat']; ?></textarea>
</div>
<button type="submit" class="btn btn-primary">Simpan</button> <a href="tampil_data.php" class="btn btn-secondary">Kembali</a>
</form>
</div>
</body>
</html>