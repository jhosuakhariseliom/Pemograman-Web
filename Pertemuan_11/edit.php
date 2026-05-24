<?php include 'koneksi.php'; $id=$_GET['id']; $d=$conn->query("SELECT * FROM siswa WHERE id='$id'")->fetch_assoc(); ?>
<!DOCTYPE html><html><body><h2>Edit Data Siswa</h2>
<form method='post' action='proses_edit.php'>
<input type='hidden' name='id' value='<?= $d['id'] ?>'>
Nama: <input type='text' name='nama' value='<?= $d['nama'] ?>'><br>
Kelas: <input type='text' name='kelas' value='<?= $d['kelas'] ?>'><br>
<button type='submit'>Update</button>
</form><a href='index.php'>Kembali</a></body></html>