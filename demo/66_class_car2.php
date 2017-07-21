<?php

    class Car {
        function MoveWheels(){     //methods are functions w/in a class
            echo "Wheels move";
        }
    }

    if(method_exists("Car", "MoveWheels")) {
        echo "The Method Exists";
    } else {
        echo "no it does not";
    }
?>
