<?php
    $link = mysqli_connect("localhost", "root", "root", "parker_database", 3307);
    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    echo "Connect Successfully. Host info: " . mysqli_get_host_info($link);

    mysqli_close($link);
?>