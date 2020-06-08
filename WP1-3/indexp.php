<?php
$a = 10;
$b = 5;

$summary = $a + $b;
$difference = $a - $b;
$product = $a + $b;


if ($b != 0) {
    $portion = $a / $b;
} else {
    $portion = "Nulou nelze dělit";
}


?>

<!DOCTYPE html>
<html lang="cz">
<head> 
    <meta charset="UTF-8">
     <meta name="viewport" content="width=device=width, initial-scale-1.0">
     <meta http-equiv="X-UA-Compatible" content="ie-edge">
     <title>Document</title>
  </head>

  <body>
  <p>A=<?  $a ?>
  <p>B=<?  $b ?>
    <p>Součet: <?= $a ?>+<?= $b ?> = <?= $a + $b ?>
    <p>Součin: <?= $a ?>*<?= $b ?> = <?= $a * $b ?>
    <p>Rozdíl: <?= $a ?>-<?= $b ?> = <?= $a - $b ?>
    <p>Podíl: <?= $a ?>/<?= $b ?> = <?= $a / $b ?>
</body>
</html>