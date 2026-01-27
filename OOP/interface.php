<?php
interface CarInterface {
    public function haydash();
    public function tormizlash();
}
interface Car2 {
    public function info();
}
class Car implements CarInterface,Car2 {
    public $model;
    public $color;
    public function haydash()
    {
         return "mashina haydalyabdi! <br>";
    }
    public function tormizlash()
    {
        return "mashina tormizlanyabdi! <br>";
    }
    public function info()
    {
        return "bu car class! <br>" ;
    }
}
$onix = new Car();
echo $onix->haydash();
echo $onix->tormizlash();
echo $onix->info();



?>