<?php

 class Car {
   public $model;
   public const BRAND = "Chevrolet" ;
   public function info() {
      return "Bu ". self::BRAND . "mashina classi! <br>";
   }
 }
 echo Car::BRAND."<br>";
 $onix = new Car();
 echo $onix->info();
 echo $onix::BRAND;


?>