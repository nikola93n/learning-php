<?php

    class Car {
        function MoveWheels(){
            echo "Wheel move";
        }
    }

 
    if(method_exists("Car", "MoveWheels" )){

        echo "The Method Exist";
    } else {
        echo "No it does not";
    }








?>