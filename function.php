<?php

function funksiyanomi() {
    echo "test";
}

/*echo "Assalomu aleykum! \n";
echo "Assalomu aleykum! \n";
echo "Assalomu aleykum! \n";
echo "Assalomu aleykum! \n";*/

function salom() {
    echo "Assalomu aleykum! \n";
}

salom();
salom() ;
salom() ;
salom() ;

$a = 15;
$b = 43;
echo $a+$b; echo "\n";
$x = 47;
$y = 28;
echo $x+$y; echo "\n";
$i = 14;
$j = 12;
echo $i+$j; echo "\n";

function yigindi($x, $y) {
    echo "Yigindi:" . $x + $y;

}
yigindi(15,43); echo "\n";
yigindi(47,28); echo "\n";
yigindi(14,12); echo "\n";

function yosh($t_yil,$x_yil =2024) {
    echo "Sizning yoshingiz:" .$x_yil -$t_yil. "da \n" ;
}
yosh(2011);
yosh(2011,2025);

function sum( $x, $y) {
    return $x + $y ;

}
 echo $summa = sum(45,14);
if($summa >30) {
    echo "summa 80 dan katta";
}
?>