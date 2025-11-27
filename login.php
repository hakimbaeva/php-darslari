<?php
session_start();
if($_SERVER['REQUEST_METHOD'] == "Post") {
    if($_POST['login'] == 'admin' && $_POST['parol'] =='12345') ;
    $_SESSION['user'] = 'admin' ;
    echo "login qilindi !  <a href='home.php'  target='_blank' >Home sahifasiga o'tish</a>" ;
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
    <form action="" method="POST">
        <label for="">login</label><br> 
        <input type="text" name="login" id=""> <br>
        <label for="">parol</label><br>
        <input type="password" name="parol" id=""><br>
        <input type="submit" value="yuborish" id="">
    </form>
</body>
</html>