<?php

class Animal {
    private $name;
    protected $zoti;
    public $ogirligi;

public function __construct($name,$zoti)
{
    $this->name = $name;
    $this->zoti = $zoti;
}

    public function eat() {
        return"Hayvon ovqatlanmoqda <br>";
    }
    public function getname() {
        return $this->name;
    }
}
class Dog extends Animal {
    public function bark() {
       return"vov vov <br> ";
    }
}
$dog = new Dog() ;
echo $dog->eat();
echo $dog->bark();
var_dump($dog);








?>