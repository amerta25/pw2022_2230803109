<?php 
$mahasiswa = 
[
  [
    "nama"=>"Joni",
    "nim"=>"123456",
    "jurusan"=>"Sistem Informasi",
    "email"=>"joni@gmail.com"
  ],
  [
    "nama"=>"Budi",
    "nim"=>"321654",
    "jurusan"=>"Sistem Informasi",
    "email"=>"budi@gmail.com"
  ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Document</title>
</head>
<body>
  <h1>Daftar Mahasiswa</h1>
  <?php foreach ($mahasiswa as $mhs) : ?>
    <ul>
      <li>Nama :<?= $mhs["nama"];?></li>
      <li>Nim :<?= $mhs["nim"];?></li>
      <li>Jurusan :<?= $mhs["jurusan"];?></li>
      <li>Email :<?= $mhs["email"];?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>