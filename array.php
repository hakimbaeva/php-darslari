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

//index
$cars = [
  0 => "cobalt",
  1 => "Test",
] ;

// bo'sh massiv
$massiv =[];
$massiv [0] = "Ismigul";
$massiv[1] ="So'najon";
print_r($massiv) ;
$massiv1 = [];
$massiv1["ism"] ="kamol";
$massiv1["familya"] ="rustamov" ;
$massiv1[0] ="test";
print_r($massiv1);
$sonlar =[5,23,4,65,76,7,87,34,] ;
print_r($sonlar);
$juft = [];
//foreach
$users =["ism" => "Ismigul" , "familiya" =>"Hakimbayeva", "yil" => 2012] ;
foreach ($users as $key => $value)  {
   echo  $key. ": ". $value. ",";
}
foreach ($users as $value) {
echo $value."," ;
}
$users += ["manzil" => "xonqa", "yosh" => 24];
print_r($users);

array_splice($sonlar,3,3);
unset($sonlar [2]);
print_r($sonlar);
print_r(array_diff($users, ["Hakimbayeva"])) ;
// sorting
$sonlar =[5,23,4,65,76,7,87,34,] ;
sort($sonlar);
print_r($sonlar);

rsort($sonlar);
print_r($sonlar);
 ?>