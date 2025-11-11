<?php 
 
 $talabalar = [
    ["ism" => "So'najon" , "familiya" => "Hakimboeva", "yosh" => "14", "baho" => "5"] 
 ]
?>
!DOCTYPE html>
<html lang="uz">
<head>
  <meta charset="UTF-8">
  <title>HTML jadvalga misol</title>
</head>
<body>
  <h2>Talabalar royxati</h2>
<table>
  <?php foreach($talabalar as $key => $item): ?>
    <tr>
  <th>name</th>
  <th>surname</th>
  <th>age</th>
  <th>grade</th>

      <td><?php echo ++$key ?></td>
      <td> <?= $item['ism'] ?></td>
      <td><?= $item['familiya'] ?> </td>
      <td><?= $item['yosh'] ?> </td>
       <td><?= $item['baho'] ?> </td>
    </tr>
  
  
  </table>

 </body>
</html>