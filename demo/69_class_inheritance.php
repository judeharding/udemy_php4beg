<?php
    class Car {
        var $wheels = 4;
        var $hood = 1;
        var $engine = 1;
        var $doors = 4;

        function MoveWheels(){
            $this->wheels = 10;
        }

        function CreateDoors(){
            $this->doors = 6;
        }
    }

    $bmw = new Car();
//the plane object inherits all of the car functionality
    class Plane extends Car {
        var $wheels = 20; // thi wheels will overwrite the CAR wheels
    }

    $jet = new Plane();
    //$jet->MoveWheels();
    echo $jet->wheels . "<br>";

    // if(class_exists("Plane")) {
    //     echo "PLANE does exist";
    // }

?>
