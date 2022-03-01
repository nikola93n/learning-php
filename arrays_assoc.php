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
        $number = array('juanita', 'maria', 'jose');

        // print_r($number);

        echo "<br>" . "<br>";

        // echo $number[1] . "<br>";

        $names = array("first_name" => 'Edwin', "last_name" => 'Diaz');

        echo "<br>" . "<br>";

        // print_r($names);

        echo $names['first_name'] . " " . $names['last_name'];
    ?>

    <?php 

        //step 1
        echo "<br>" . "<br>";
        $number1 = 6;
        $number2 = 20;         
        
        //step 2
        echo $number1; 
        echo "<br>";
        echo $number2;        
        echo "<br>";
        echo $number1 + $number2 . "<br>";

        echo "<br>";

        //step 3
        $numberList = array("Marko Polo", "Cat", "Bob");
        $numberListAssoc = array("first_name" => 'Burus', "last_name" => 'Lee');

        echo $numberList[1];
        echo "<br>";
        echo $numberListAssoc['first_name'] . " " . $numberListAssoc['last_name'];
    ?>

</body>
</html>