<?php  
   
        $connection = mysqli_connect('localhost', 'root', '', 'loginapp');

        if($connection){
            echo "We are connected";
        } else {
            die("Database connection failed");
        }
        
        $query = "SELECT * FROM users";


        $result = mysqli_query($connection, $query);

         if(!$result) {
             die('Query FAILED' . mysqli_error());
         }            
  
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    
    <div class="container">
        <div class="row">
            <div class="col-xs-6">
                <?php 
                    while($row = mysqli_fetch_assoc($result)){
                        ?>
                        <pre>
                            <?php
                        print_r($row);
                        ?>
                        </pre>
                        <?php
                    }
                ?>
            </div>
        </div>
    </div>








<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>