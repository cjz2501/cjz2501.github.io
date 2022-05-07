<?php
    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', 'root');
    define('DB_NAME', 'parker_database');
    $link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME, 3307);
    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    echo "Connect Successfully. Host info: " . mysqli_get_host_info($link) . "<br>";
?>