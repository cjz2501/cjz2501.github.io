<?php
// Initialize the session
session_start();
require_once "config.php";

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b></h1>
    <p>
        <a href="logout.php" class="btn btn-danger ml-3">Sign Out of Your Account</a>
    </p>
    <p><?php
    $userId = $_SESSION["id"];
    $sql = "SELECT users.id, posts.userId, posts.postContents FROM posts INNER JOIN users ON users.id=posts.userId WHERE users.id = $userId;";
    $response = mysqli_query($link, $sql);
    if($response->num_rows > 0){
        while($row = $response ->fetch_assoc()){
            echo "Username: " . $_SESSION["username"]. " - ". $row["postContents"]."<br>";
        }
    } else{
        echo "0 results";
    }    ?>
    </p>
</body>
</html>