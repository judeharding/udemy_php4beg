<?php
// constructors are methods when we create an instance of a class
    class Car {
        var $wheels = 4;
        var $hood = 1;
        var $engine = 1;
        var $doors = 4;
// to make a constructor, use the underline TWICE
        function __construct(){
            echo $this->wheels = 10;
        }
    }
// every time we create a new instance of the CAR, it AUTOMATICALLY
//   executes the constructor
    $bmw = new Car();
    $truck = new Car();
    $semi = new Car();
?>
