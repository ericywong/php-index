<?php 

class Car {

    function MoveWheels() {
        echo "Wheels move";
    }

}

if(method_exists("Car", "MoveWheels")) {
    echo "Chyeah the method worked!";
} else {
    echo "try again";
}

?>