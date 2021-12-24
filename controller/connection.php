<?php
    $db_host = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "db_perpustakaan";

    $db = new mysqli($db_host,$db_user,$db_pass,$db_name);

    if($db -> connect_error){
        die("Connection Error");
    } else {
        echo "<script>console.log('Database Connected');</script>" ;  
    }


?>