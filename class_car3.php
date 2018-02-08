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
    }

}

//instantiating our class/object
$bmw = new Car();
//instantiating our second class/object
$honda = new Car();

//invoking/calling the object
$bmw->MoveWheels();
//activating second object
$honda->MoveWheels();
?>