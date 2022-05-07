<?php
    session_start();
    $link = mysqli_connect("localhost", "root", "root", "parker_database", 3307);
    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    echo "Connect Successfully. Host info: " . mysqli_get_host_info($link);
    $idea = $_REQUEST['createPost'];
    $userId = $_SESSION['id'];

    $sql = "INSERT INTO posts (userId, postContents) VALUES ('$userId', '$idea')";
    if(mysqli_query($link, $sql)){
        echo $idea;
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }

    mysqli_close($link);
?>