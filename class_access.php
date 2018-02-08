<?php 

class Car {

    //access for these properties
    public $wheels = 4; //same is var - available to entire program
    protected $hood = 1; //only available in class or within the sub-class
    private $engine = 1; //available only to this class
    var $doors = 4;


    function ShowProperty(){

        echo $this->hood;
    }

    function ShowPrivate(){
        echo $this->engine;
    }

}

//instantiating our class/object
$bmw = new Car();

//public - works outside of the class
echo $bmw->wheels;
//protected and does not work outside of class = error
// echo $bmw->hood;
//this one works because nested in one of the subclasses
echo $bmw->ShowProperty();

//this one works because it was extended and placed into a subclass
$semi = new Semi();
class Semi extends Car {
    function ShowProperty(){
        echo $this->hood;
    }
}
$semi->ShowProperty();

//what happens when you try to echo something that has a private class?
    // $audi = new Audi();
    // class Audi extends Car {
    //     function ShowProperty(){
    //         echo $this->engine;
    //     }
    // }
    // $audi->ShowProperty();
//does not work!

//works only within the class
$bmw->ShowPrivate();
?>