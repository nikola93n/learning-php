<?php 
    $file = "example.txt";

    if($handele = fopen($file, 'r')){

       echo $content = fread($handele, /*10*/ filesize($file)); // Each bite equals a character

        fclose($handele);
    }else{
        echo "The application was not able to write on the file.";
    }
    



?>