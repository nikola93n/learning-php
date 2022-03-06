<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php  
    /*
        $numbers = array(345, 391, 676, 2657, 5784);

        foreach($numbers as $numbers){
            echo $numbers . "<br>";
        }
        */
    ?>



    <?php
    //Practice section 3
        if(6 > 5 ) {
            echo "I love PHP." . "<br>";
        } elseif (3 > 4) {
            echo "Not true.";
        } 
        else {
            echo "Yes, it is." . "<br>";
        }      
        
    ?>

    <?php 
    //for loop
    for($counter = 0; $counter <= 10; $counter++) {
        echo $counter . "<br>";
    }    
    ?>

    <?php  
    //switch statments
    $number = 10; 
    switch($number) {
        case 11:
        echo "It is 11";
        break;
        case 12:
        echo "It is 12";
        break;
        case 13:
        echo "It is 13";
        break;
        case 14:
        echo "It is 10";
        break;
        case 10:
            echo "It is 10";
            break;

        default :
          echo "we could not find anything";
          break;
    }
    ?>



</body>

</html>