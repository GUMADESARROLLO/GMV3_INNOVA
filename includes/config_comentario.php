<?php

    //database configuration
    $host       = "192.168.1.55";
    $user       = "Dios";
    $pass       = "a7m1425.";
    $database   = "gumanet";

    @$connect_comentario = new mysqli($host, $user, $pass, $database);

    if (!$connect) {
        die ("connection failed: " . mysqli_connect_error());
    } else {
        $connect->set_charset('utf8');
    }



?>