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
        function calculate(){
            $number1 = 20;
            $number2 = 50;
            $sum = $number1 + $number2;

            return $sum;
        }

        $resolt = calculate();
        echo $resolt;       

        echo "<br>";
        echo "<br>";
    ?>

    <?php        

        function hola($hello){
            echo $hello;
        }

        hola('Hey is that spanish?')
        
    
    ?>

</body>

</html>