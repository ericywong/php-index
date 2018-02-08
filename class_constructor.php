<?php 

class Car {

    //properties of the car
    var $wheels = 4;
    var $hood = 1;
    var $engine = 1;
    var $doors = 4;


    //double underscores for construct
    //construct executes once a class is instantiated 
    function __construct() {
        echo "Wheels move";
        echo $this->wheels = 10;
    }

}

//instantiating our class/object
$bmw = new Car();
$truck = new Car();
$semi = new Car();

?>