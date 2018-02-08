<?php 

class Car {

    //properties of the car
    var $wheels = 4;
    var $hood = 1;
    var $engine = 1;
    var $doors = 4;


    //methods of the car
    function MoveWheels() {
        echo "Wheels move";
        $this->wheels = 10;
    }

    //another method of the car
    function CreateDoors() {
       $this->doors = 16;
    }

}

//instantiating our class/object
$bmw = new Car();

//deriving the properties ($ sign not necessary!)
echo $bmw->wheels;

//change wheels
$bmw->wheels = 8;
echo $bmw->wheels;
//invoking function and changing wheels to 10;
echo $bmw->MoveWheels();
echo $bmw->wheels . "<br><br>";


//creating a new instance
$truck = new Car();
echo $truck->wheels = 18 . "<br><br>";
//just invoking the door property in Car object
echo $truck->doors . "<br><br>";
//invoking the door property within the Car Create Doors method
$truck->CreateDoors();
echo $truck->doors;
?>