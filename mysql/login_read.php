<?php  include "db.php";
include "functions.php"; 

        $connection = mysqli_connect('localhost', 'root', '', 'loginapp');

        if($connection){
            echo "We are connected";
        } else {
            die("Database connection failed");
        }
        
        $query = "SELECT * FROM users";


        $result = mysqli_query($connection, $query);

         if(!$result) {
         die('Query FAILED' /*. mysqli_error()*/);
         }            
  
?>




<?php include 'includes/header.php' ?>
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

<?php include 'includes/footer.php' ?>
