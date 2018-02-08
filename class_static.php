<?php 

class Car {

    //static = attached to the class
    //and not to the instance
    static $wheels = 4;
    var $hood = 1;


    //methods of the car
    function MoveWheels() {
        //to put into methods
        Car::$wheels=10;
    }


}

//instantiating our class/object
$bmw = new Car();
//can't access static properties this way.
    // echo $bmw->wheels;

//use :: to access the static variable
//instance not necessary anymore
echo Car::$wheels . "<br><br>";

//calling the method w/o instance
Car::MoveWheels();
echo Car::$wheels;
?>