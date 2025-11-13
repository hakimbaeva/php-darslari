<?php
$talabalar = [
    ["ism" => "So'najon", "familiya" => "Hakimboeva", "yosh" => "14", "baho" => "5"]
];
?>
<!DOCTYPE html>
<html lang="uz">
<head>
  <meta charset="UTF-8">
  <title>HTML jadvalga misol</title>
</head>
<body>
  <h2>Talabalar ro‘yxati</h2>

  <table border="1" cellpadding="5" cellspacing="0">
    <tr>
      <th>#</th>
      <th>Ism</th>
      <th>Familiya</th>
      <th>Yosh</th>
      <th>Baho</th>
    </tr>

    <?php foreach ($talabalar as $key => $item): ?>
    <tr>
      <td><?= ++$key ?></td>
      <td><?= $item['ism'] ?></td>
      <td><?= $item['familiya'] ?></td>
      <td><?= $item['yosh'] ?></td>
      <td><?= $item['baho'] ?></td>
    </tr>
    <?php endforeach; ?>
  </table>

</body>
</html>
