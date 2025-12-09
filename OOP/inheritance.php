<?php
//Exam1//
class Animal 
{
    public function eat()     
    {
        echo "Hayvon ovqat yemoqda! <br>";
    }
}

class Cat extends Animal {
    public function meow() {
        echo "Miyov";
    }
}
$cat = new Cat();
$cat->eat();
$cat->meow();

//Exam2//
class Car {
    public $model ;
    private $color;
    protected $probeg;
    public function drive() {
        return "Mashina harakatlanyabdi!<br>" ;
    }
}




class ElektCar extends Car {
     public $power;
     public function probegniKiritish($probeg)  {
        $this->probeg = $probeg;
     }

     public function probegniOlish() {
        return $this->probeg;
     }
     public function setColor($color) {
        $this->color = $color;
     }
     public function getColor() {
        return $this->color;
     }
}
$byd = new ElektCar();
$byd->probegniKiritish(52000);
echo $byd->probegniOlish();
$byd->setColor("white") ;
echo $byd->getColor();
?>