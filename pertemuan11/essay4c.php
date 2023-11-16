<?php 
$negara = [
  "Indonesia" => "Jakarta",
  "Singapura" => "Singapura",
  "Malaysia" => "Kuala Lumpur",
  "Brunei Darusalam" => "Bandar Seri Begawan",
  "Thailand" => "Bangkok",
  "Laos" => "Vientiane",
  "Filipina" => "Manila",
  "Myanmar" => "Naypyidaw"
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Negara ASEAN dan Ibukota</title>
</head>
<body>
  <h1>Daftar Negara ASEAN dan Ibukota</h1>
  <ul>
    <?php foreach ($negara as $namaNegara => $ibukota) : ?>
      <li><?= $namaNegara ?> : <?= $ibukota ?></li>
    <?php endforeach; ?>
  </ul>
</body>
</html>