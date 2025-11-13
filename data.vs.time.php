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



?>