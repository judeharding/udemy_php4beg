<?php

    class Car {
// vars are properties within a class
        var $wheels = 4;
        var $hood = 1;
        var $engine = 1;
        var $doors = 4;
// functions are methods within a class
        function MoveWheels(){
            $this->wheels = 10;
        }

        function CreateDoors(){
            $this->doors = 6;
        }
    }
// create an object based on the instance of a class
    $bmw = new Car();    // created an OBJECT based on the class above
    $truck = new Car();  // created another INSTANCE of the class above

        echo "a bmw has " . $bmw->wheels . " wheels " . "<br>"; // executes the wheels method of the bmw obj instance
        echo "a truck has " . $truck->wheels = 10 . " wheels " . "<br>";

    $truck->CreateDoors();
        echo "a truck has " .$truck->doors ." doors " . "<br>";

?>
