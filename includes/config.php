<?php

    $host       = "mysql_server";
    $user       = "root";
    $pass       = "a7m1425.";
    $database   = "gmv3_inn"; 

    $connect = new mysqli($host, $user, $pass, $database);
    if (!$connect) {
        die ("connection failed: " . mysqli_connect_error());
    } else {
        $connect->set_charset('utf8');
    }



?>