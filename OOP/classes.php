<?php

class Car {
 // Properties - Xususiyat
 public $model;
 public $color;

 // Method - Funksiya 
 public function __construct($model) {
    $this->model = $model;
    
 }
}
 /*$matiz = new Car("matiz");
 $matiz->model = "Matiz";
 $matiz->color ="Oq";
 echo $matiz->model."<br>";
$matiz->haydash()."<br>";*/


//** constructor

class Mahsulotlar {

private $nomi;
public $kirim_narxi;
public $sotuv_narxi;
public $birligi;

public function setNomi($nomi) {
    $this->nomi = $nomi;
}

public function getNomi() {
    return $this->nomi;
}

public function __construct($sotuv_narxi)
{
  $this->sotuv_narxi=$sotuv_narxi;
}

public function __destruct()
{
    echo "Destruct  ishga tushdi!" ;
}

public function  birliginiKiritish($birligi) {
    $this->birligi = $birligi;
}

public function birliginiOlish() {
    return $this->birligi;
}
 
public function info() {
    echo "Bu mahsulotlar classi! <br>";
 }
}
$pepsi = new Mahsulotlar(12000);
//var_dump($pepsi);
$pepsi->setNomi("Pepsi");
$pepsi->kirim_narxi = 8000;
$pepsi->birliginiKiritish("dona <br>kjh") ;
echo $pepsi->getNomi()."<br>" ;
echo $pepsi->birliginiOlish()."<br>";
var_dump($pepsi);
echo "<br>";
print_r($pepsi);














?>