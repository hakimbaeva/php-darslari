<?php
/*session_start();
echo $_SESSION["ism"];*/
session_start();
 session_unset(); //Barcha sessionlarni o'chiradi//
session_destroy();//barcha sessionlarni va sessionni faylini ham o'chiradi
unset($_SESSION['ism']) ;
echo "Ma'lumot o'chirildi";
?>