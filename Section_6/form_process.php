<?php  
    if(isset($_POST['submit'])){
        $names = array("Edwin", "Student", "Peter", "Samid", "Mohad", "Maria", "Jane", "Tom");
        $minumum = 5;
        $maximum = 10;

        $username = $_POST['username'];
        $password = $_POST['password'];

        if(strlen($username) < $minumum){
            echo "Username has to be longer than five" . "<br>";
        }
        
        if(strlen($username) > $maximum){
            echo "Username has to be shorter than ten" . "<br>";
        }
        
        if(!in_array($username, $names)){
            echo "Sorry, you are not allowed to login" . "<br>";
        } else {
            echo "Welcome";
        }
        
        
        
        
               
        
        // echo "Hello" . $username; 
        // echo "<br>";
        // echo "Your Password is" . $password;
    }    
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>