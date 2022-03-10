<?php include "db.php"; ?>

<?php  

function createRows() {

if(isset($_POST['submit'])){
    global $connection;
    $username = $_POST['username'];
    $password = $_POST['password'];    
    $query = "INSERT INTO users(username, password) VALUES ('$username', '$password')";

    $result = mysqli_query($connection, $query);

     if(!$result) {
         die('Query FAILED');
     }

    }
  
}

    function showAllData(){   
        global $connection;
        $query = "SELECT * FROM users";
        $result = mysqli_query($connection, $query);
        if(!$result) {
        die('Query FAILED' /*. mysqli_error()*/);
        }         
        
        while($row = mysqli_fetch_assoc($result)){
            $id = $row['id'];
            echo "<option value='$id'>$id</option>";

        }
    }

    function UpdateTable() {
       global $connection;
       $username = $_POST['username'];
       $password = $_POST['password'];
       $id = $_POST['id'];

       $query = "UPDATE users SET username = '$username', password = '$password' WHERE id = '$id' "; 
        $result = mysqli_query($connection, $query);
        if(!$result) {
            die("QUERY FAILED");
        }
    }

    function deleteRows() {
        global $connection;
        $username = $_POST['username'];
        $password = $_POST['password'];
        $id = $_POST['id'];
        if(!$id){
            echo 'Table is already empty';
        }
        
        $query = "DELETE FROM users WHERE id = '$id' "; 
         $result = mysqli_query($connection, $query);
         if(!$result) {
             die("QUERY FAILED");
         }
     }
    

?>