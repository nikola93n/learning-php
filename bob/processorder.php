<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bob's Auto Parts - Order Results</title>
</head>

<body>

    <!-- <h1>Bob's Auto Parts</h1>
    <h2>Order Results</h2> -->

    <?php  
        // echo "<p>Order processed at ";
        // echo date('H:i, jS F Y');
        // echo "</p>";
    ?>

    <?php
  // create short variable names
  $tireqty = $_POST['tireqty'];
  $oilqty = $_POST['oilqty'];
  $sparkqty = $_POST['sparkqty'];

  echo $tireqty;
  echo $oilqty;
  echo $sparkqty;
?>
</body>

</html>