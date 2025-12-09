<?php
abstract class A {
    abstract   public function test();
}

abstract class Animal extends A {

public $guruh;
public function __construct($guruh) {

    $this->guruh = $guruh ;
} 
    abstract public function sound();

    public function eat() {
        echo "Ovqat yemoqda!<br> ";
    }
}
class Dog extends Animal {
public function test()
{
    echo "Bu test funksiyasi!";
}

    public function sound()
     {
        echo "Vov-Vov!<br>";
    }
}
$dog = new Dog("Yovvoyi hayvonlar ");
echo $dog->sound();
$dog->eat();
echo $dog->guruh;


?>