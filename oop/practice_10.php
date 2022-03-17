<?php 



    class Dog {
        var $eyeColors = "blue";
        var $noseColor = "black";
        var $furColor = "brown";
        
        function Showall(){
           echo $this -> eyeColors;
           echo "<br>";
           echo $this -> noseColor;
           echo "<br>";
           echo $this -> furColor;
        }
    }

    $pitbull = new Dog();
    $pitbull -> ShowAll();
    
















?>