<?php

require 'function.php';

$id = $_GET['id'];

// query berdasarkan id

$m = query("SELECT *FROM mahasiswa WHERE id = $id");

?>


<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Mahasiswa</title>
</head>

<body>
  <h3>Detail Mahasiswa</h3>
  <ul>
    <li><img src="img/<?= $m['gambar']; ?>" width=" 200"></li>
    <li>NPM : <?= $m['npm']; ?></li>
    <li>Nama : <?= $m['nama']; ?></li>
    <li>Email : <?= $m['email']; ?></li>
    <li>Jurusan : <?= $m['jurusan']; ?></li>
    <li><a href="#">Ubah</a> | <a href="#">Hapus</a></li>
    <li><a href="latihan3.php">Kembali ke Daftar Mahasiswa</a></li>
  </ul>
</body>

</html>