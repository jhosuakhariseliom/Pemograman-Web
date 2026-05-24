<?php include 'koneksi.php'; $data = $conn->query("SELECT * FROM siswa"); ?>
<!DOCTYPE html><html><head><title>Data Siswa</title></head><body>
<h2>Data Siswa</h2>
<a href='tambah.php'>Tambah Data</a>
<table border='1' cellpadding='8'>
<tr><th>ID</th><th>Nama</th><th>Kelas</th><th>Aksi</th></tr>
<?php while($row=$data->fetch_assoc()){ ?>
<tr>
<td><?= $row['id'] ?></td><td><?= $row['nama'] ?></td><td><?= $row['kelas'] ?></td>
<td><a href='edit.php?id=<?= $row['id'] ?>'>Edit</a> | <a href='hapus.php?id=<?= $row['id'] ?>'>Hapus</a></td>
</tr><?php } ?>
</table></body></html>