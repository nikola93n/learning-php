<?php include "includes/header.php" ?>

<?php 
    
    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        echo $username;
        echo "<br>";
        echo $password;
    }
   
?>






<div class="col-xs-6 mt-4">
    <form action="login.php" method="post">
        <div class="form-group mb-3">
            <label for="username">Username</label>
            <input type="text" name="username" class="form-control">
        </div>
        <div class="form-group mb-3">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control">
        </div>
        <input class="btn btn-primary" type="submit" name="submit" value="Submit">
    </form>
</div>



<?php include "includes/footer.php" ?>







