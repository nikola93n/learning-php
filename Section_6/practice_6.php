<?php 
    if(isset($_POST['submit'])){
        $minimum = 5;
        $maximum = 10;

        $username = $_POST['username'];
        $password = $_POST['password'];

        if(strlen($username) < $minimum){
            echo "Username should be longer than 5.";
            echo "<br>";
        }

        echo "Your username is" . $username . "<br>";
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
    
    <form action="practice_6.php" method="post">
        <input type="username" name="username" placeholder="Enter your username"><br>
        <input type="password" name="password" placeholder="Enter your password"><br>
        <input type="submit" name="submit" value="Submit">
    </form>

</body>
</html>