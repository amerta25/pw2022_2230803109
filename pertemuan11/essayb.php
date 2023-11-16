<?php 
 $negara = [
 ["Indonesia","Singapura","Malaysia","Brunei","Thailand","Laos","Filipina","Myanmar"]
 
 ];
?>
<html lang="en">
<head>
  <title>Document</title>
</head>

<body>
  <h1>Daftar Negara ASEAN awal</h1>
  <?php foreach ($negara as $ngr) : ?>
  <ul>
  <li><?= $ngr[0]?></li>
    <li><?= $ngr[1]?></li>
    <li><?= $ngr[2]?></li>
    <li><?= $ngr[3]?></li>
    <li><?= $ngr[4]?></li>
  </ul>
  <?php endforeach; ?>
  <h1>Daftar Negara ASEAN baru</h1>
  <?php foreach ($negara as $ngr) : ?>
  <ul>
  <li><?= $ngr[0]?></li>
    <li><?= $ngr[1]?></li>
    <li><?= $ngr[2]?></li>
    <li><?= $ngr[3]?></li>
    <li><?= $ngr[4]?></li>
    <li><?= $ngr[5]?></li>
    <li><?= $ngr[6]?></li>
  </ul>
  <?php endforeach; ?>
</body>
</html>