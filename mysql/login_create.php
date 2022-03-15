<?php  
include "db.php";
include "functions.php";
createRows(); 
?>

<?php include "includes/header.php" ?>

<body>
    
    <div class="container">
        <div class="row">
            <div class="col-xs-6">
                <h1 class="text-center">Create</h1>
                <form action="login_create.php" method="post">
                    <div class="form-gruop mb-3">
                        <label for="username">Username</label>
                        <input type="text" name="username" class="form-control">
                    </div>
                    <div class="form-gruop mb-4">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                    <input class="btn btn-primary" type="submit" value="CREATE" name="submit">
                </form>
            </div>
        </div>
    </div>





<?php include "includes/footer.php" ?>


