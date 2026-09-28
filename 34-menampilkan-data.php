<?php

$daftar_mahasiswa = [
  [
    "nama"   => "Budi Santoso",
    "alamat" => "Jl. Mawar No. 12, Jakarta",
    "prodi"  => "Teknik Informatika"
  ],
  [
    "nama"   => "Siti Aminah",
    "alamat" => "Jl. Anggrek No. 45, Bandung",
    "prodi"  => "Sistem Informasi"
  ],
  [
    "nama"   => "Eko Prasetyo",
    "alamat" => "Jl. Pemuda No. 8, Surabaya",
    "prodi"  => "Data Science"
  ]
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Mahasiswa</title>
</head>

<body>
  <h1>Daftar Mahasiswa</h1>
  <table border="1" cellpadding='8'>
    <tr>
      <th>Nama</th>
      <th>Alamat</th>
      <th>Prodi</th>
    </tr>
    <!-- full echo -->
    <!-- <?php foreach ($daftar_mahasiswa as $value) {
            echo "<tr>
        <td>{$value['nama']}</td>
        <td>{$value['alamat']}</td>
        <td>{$value['prodi']}</td>
        </tr>";
          } ?> -->

    <!-- Buka tutup PHP -->
    <?php foreach ($daftar_mahasiswa as $value) { ?>
      <tr>
        <td><?= $value['nama'] ?></td>
        <td><?= $value['alamat'] ?></td>
        <td><?= $value['prodi'] ?></td>
      </tr>
    <?php } ?>

    <!-- Alternative syntax -->
    <!-- <?php foreach ($daftar_mahasiswa as $value): ?>
      <tr>
        <td><?= $value['nama'] ?></td>
        <td><?= $value['alamat'] ?></td>
        <td><?= $value['prodi'] ?></td>
      </tr>
    <?php endforeach ?> -->
  </table>
</body>

</html>