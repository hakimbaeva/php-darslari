<?php
// class
class Car {
    public $model;
    public $color;
    public $probeg;

public function __construct($model,$color) {

    $this->model = $model;
    $this->color = $color;
}



    public function setProbeg($probeg) {
        $this->probeg = $probeg;
    }

    public function drive() {
        echo "Mashina harakatlanyapdi!";
    }
}

$bmw = new Car("BMW X5","White");
echo $bmw->model."<br>";
echo $bmw->color."<br>";




/*obyekt
$bmw = new Car();
$bmw->model = "BMW X5";
$bmw->color = "Black";
echo $bmw->model . "<br>";
echo $bmw->drive() . "<br>";
 To'g'ri chaqiruv
$bmw->setProbeg(10000 );
echo $bmw->probeg . "<br>"; */


?>