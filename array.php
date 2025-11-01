<?php 
//10,20,30,40,50,60//
//array
$mevalar =[ "olma", "anor", "uzum"] ;
 echo $mevalar [1] ;
 
  //birinchi
  $sonlar = array(2,5,7,13,"test",'qiymat') ;
  //ikkinchi
  $sonlar1 = [3,4,5,6,'test'] ;

  echo $sonlar[4];
  echo "\n";
  echo $sonlar[4] ;
  echo "\n";
  echo $sonlar[4] =70 ;
  echo $sonlar[4];
  print_r($sonlar);
  //massivga yangi element qo'shish oxiriga
  array_push($sonlar,133,45);
  $sonlar[] = 444;
  print_r($sonlar);
  $car = ["model" => "cobalt", "brand" => "chevrolet", "year" => "2025"];
 /* print_r($car);*/
echo $car['model'];
$car['model'] ='onix';
echo "\n";
echo $car['model'];
?>