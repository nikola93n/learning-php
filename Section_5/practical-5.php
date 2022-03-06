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
    //pre-built math function
    echo rand(1, 5000);
    echo "<br>";

    //pre-built string function
    $string = "bjdjbdjlojalsckm";
    $valueLength = strlen($string);
    echo $valueLength;
    echo "<br>";
    echo "<br>";
    echo "<br>";

    //pre-built Array function
    $values = ['fedwedqw', 432432, 'fsffafsf', 432423, $string];
    $found = in_array($string, $values);

    if($found){
        echo "Wowo we did it together";
    } else {
        echo "We messed up, we could not find it.";
    }

    ?>

</body>

</html>