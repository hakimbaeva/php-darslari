<?php

class House {
    public $adress;
    public $rooms;
    
    public function uyEtaji() {
        return "2";
    }
    public function __construct($adress,$rooms) {
    $this->adress = $adress;
    $this->rooms = $rooms;
    }

    public function openDoor(){
        return "Uy eshigi ochildi!<br>";
    }
    public function getInfo() {
        return "Uyni barcha ma'lumotlari chiqsin!<br>";
    }
    
}
class Apartment extends House {
    public $floor;
    public function getType() {
        return "Bu kvartira!<br>`";
    }
}

$apartment= new Apartment("Xonqa","10-room <br>");
echo $apartment->adress ;
echo $apartment->rooms ;
echo $apartment->openDoor();
echo $apartment->getInfo();
echo $apartment->getType();












?>