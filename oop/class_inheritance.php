<?php

use Car as GlobalCar;

    class Car {  //vars are properties or objects of the class

        var $wheels = 4;
        var $hood = 1;
        var $engine = 1;
        var $doors = 4;

        function MoveWheels(){ // functions in class are methodes
            $this -> wheels = 10;
        }

        function CreateDoors(){
            $this -> doors = 6;
        }
    }

    $bmw = new Car();
    
    class Plane extends Car {

        var $wheels = 20;

    }

    $jet = new Plane();

    // $jet -> MoveWheels();
    echo $jet -> wheels;





?>