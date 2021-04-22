<?php
    $servername = "mysql-kmsamod.alwaysdata.net";
    $username = "kmsamod";
    $password = "riko2002";
    $dbname = "kmsamod_123";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " .$conn->connect_error);
    };
?>
