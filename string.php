<?php

$ism ="So'najon ";
$familya = "Hakimbayeva";
echo strtoupper($ism);
echo "\n";
echo strtolower($ism);
echo "\n";
echo str_replace('hakimbayeva', 'Hakimbayeva', $ism);
echo "\n";
echo $ism;
// ********

echo "\n";
echo strrev("Hello");
echo "\n";
echo strrev("Bexruz");
echo "\n";
echo trim( "Parol Text" );
echo "\n";    
echo $familya .''.$ism;
echo "\n";
$matn ="Hello";
echo substr($matn, 3);
echo "\n";
echo substr($matn,2,3,);

?>