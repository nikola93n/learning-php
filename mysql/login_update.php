<?php include "db.php"; ?>   
<?php include "functions.php"; ?>
<?php  UpdateTable(); ?>
<?php include "includes/header.php" ?>


<body>
    
    <div class="container">
        <div class="row">
            <div class="col-xs-6">
                <h1 class="text-center">Update</h1>
                <form action="login_update.php" method="post">
                    <div class="form-gruop mb-3">
                        <label for="username">Username</label>
                        <input type="text" name="username" class="form-control">
                    </div>
                    <div class="form-gruop mb-3">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <select name="id" id="">

                            <?php 
                              showAllData();
                            ?>

                          
                        </select>
                    </div>
                    <input class="btn btn-primary" type="submit" value="UPDATE" name="submit">
                </form>
            </div>
        </div>
    </div>


<?php include 'includes/footer.php' ?>
