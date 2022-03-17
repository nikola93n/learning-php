<?php 
    include "includes/header.php";
    include "db.php";
    include "functions.php";
    receivingData();
?>
  




<div class="col-xs-6 pt-3">
    <form action="login.php" method="post">
        <div class="form-group mb-3">
            <label for="username">Username</label>
            <input type="text" name="username" class="form-control">
        </div>
        <div class="form-group mb-3">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control">
        </div>
        <input type="submit" name="submit" value="Submit" class="btn btn-primary">
    </form>
</div>



<?php include "includes/footer.php" ?>







