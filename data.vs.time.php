<?php 
date_default_timezone_set("Asia/Tashkent") ;

//date
echo date("y.m.d"). "<br>" ;
echo date("y/m/d"). "<br>" ;
echo date("d.m.Y"). "<br>" ;
echo date("d.m.y"). "<br>" ;
echo date("y/m/d"). "<br>" ;
echo date("d.m.Y H:i:s"). "<br>" ;
echo date("y.m.d H:i"). "<br>" ;
echo date("l"). "<br>" ;
echo date("d.F.y"). "<br>" ;

// time
echo time(). "<br>";
echo date("d.m.Y"). "<br>";
echo date("d.m.Y " ,  strtotime("2025-11-23")  ). "<br>";
// 15.11.2025
echo strtotime("+7") ;
echo strtotime("d.m.Y H:i" ,strtotime("+7 days")). "<br>" ;
echo strtotime("Y-m-d " ,strtotime("last monday")). "<br>" ;
echo strtotime("d.m.Y " ,strtotime("next year")). "<br>" ;
echo strtotime("d.m.Y " ,strtotime("2024-11-14")). "<br>" ;
$t_yil ="2011-12-13";
$yosh =(time() - strtotime($t_yil)) / (60 * 60 * 24 * 365) ;
echo (int)$yosh ;
echo strtotime("d.m.Y " ,strtotime("-10 days")). "<br>" ;
?>