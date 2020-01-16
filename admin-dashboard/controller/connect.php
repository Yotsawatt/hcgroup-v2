<?php 

    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "newhcgroup";

    $connect = new mysqli($host, $user, $password, $database);

    if($connect->connect_error) {
        die("Connecttion failed:" . $connect->connect_error);
    }
    else{
        // echo "Connected successfully";
    }

?>