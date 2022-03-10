<?php include "db.php"; ?>   
<?php include "functions.php"; ?>
<?php        
if(isset($_POST['submit'])) {
    deleteRows();
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
                <form action="login_delete.php" method="post">
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
                    <input class="btn btn-primary" type="submit" value="DELETE" name="submit">
                </form>
            </div>
        </div>
    </div>








<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>