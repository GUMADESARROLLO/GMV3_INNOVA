<?php

    //database configuration
    $host       = "mysql-svc";
    $user       = "root";
    $pass       = "a7m1425.";
    $database   = "gmv3_innova"; 

    $connect = new mysqli($host, $user, $pass, $database);
    if (!$connect) {
        die ("connection failed: " . mysqli_connect_error());
    } else {
        $connect->set_charset('utf8');
    }



?>