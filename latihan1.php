<?php
// koneksikan database
$conn = mysqli_connect('localhost', 'root', 'root', 'kuliah');

// query isi tabel mahasiswa
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");

//ubah data ke dalam array
$rows = [];
while ($row = mysqli_fetch_assoc($result)) {
  $rows[] = $row;
}
//tampung ke variable mahasiswa
$mahasiswa = $rows;

?>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Mahasiswa</title>
</head>

<body>
  <h3>Daftar Mahasiswa</h3>
  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>#</th>
      <th>Gambar</th>
      <th>NPM</th>
      <th>Nama</th>
      <th>Email</th>
      <th>Jurusan</th>
      <th>Aksi</th>
    </tr>

    <?php foreach ($mahasiswa as $m) : ?>
      <tr>
        <td>1</td>
        <td><img src="img/<?= $m['gambar']; ?>" width="60"></td>
        <td><?= $m['npm']; ?></td>
        <td><?= $m['nama']; ?></td>
        <td><?= $m['email']; ?></td>
        <td><?= $m['jurusan']; ?></td>
        <td>
          <a href="#">Ubah</a> |
          <a href="#">Hapus</a>
        </td>
      </tr>
    <?php endforeach ?>

  </table>
</body>

</html>