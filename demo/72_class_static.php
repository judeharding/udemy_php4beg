<?php

class Car {
    static $wheels = 4; // static keyword
    var $hood = 1;

    function MoveWheels(){
        Car::$wheels = 10;
    }
}

$bmw = new Car();
//$bmw->wheels; -- this won't work b/c it's a static property

Car::MoveWheels();  //2 :: allows you to access a static property in a class instead of arrow
//echo Car::$wheels;

?>
