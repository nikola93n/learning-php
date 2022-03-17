<?php 
    $file = "example.txt";

    if($handele = fopen($file, 'w')){

        fwrite($handele, 'I love PHP and this is really good stuff!');

        fclose($handele);
    }else{
        echo "The application was not able to write on the file.";
    }
    



?>