<?php 
 $mahasiswa = [
 ["Joni","123456","Sistem Informasi","joni@gmail.com"],
 ["Budi","65413","Teknik Informatika","budi@gmail.com"],
 ["Angga","789654","Ilmu Komputer","angga@gmail.com"],
 ["Rio","896546","Teknik Jaringan","rio@gmail.com"]
 ];
?>
<html lang="en">
<head>
  <title>Document</title>
</head>

<body>
  <h1>Daftar Mahasiswa</h1>
  <?php foreach ($mahasiswa as $mhs) : ?>
  <ul>
  <li><?= $mhs[0]?></li>
    <li><?= $mhs[1]?></li>
    <li><?= $mhs[2]?></li>
    <li><?= $mhs[3]?></li>
  </ul>
  <?php endforeach; ?>
</body>
</html>