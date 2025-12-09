<?php
class Car {
   public   const BRAND = "BMW";  //class consttant
   public function info() {
    return self::BRAND ;
   }
}
$bmw = new Car();
echo $bmw->info()."<br>";
echo Car::BRAND;




?>