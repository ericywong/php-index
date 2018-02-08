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

//new class
// extends help shuffling in other class methods and properties 
// into the new class
class Plane extends Car {
    var $hood = 20;
}
$boeing = new Plane();
echo $boeing->doors;
echo $boeing->MoveWheels();
//overriding parent properties
echo $boeing->hood;

// if(class_exists("Plane")) {
//     echo "class Plane exists";
// }


?>