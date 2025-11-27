<?php
session_start();
if(isset($_SESSION['user'])) {
    echo 'Avval login qiling' ;
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <h1>Xush kelibsiz bu home sahifasi</h1>  
</body>
</html>