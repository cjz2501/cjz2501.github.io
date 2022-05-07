<!DOCTYPE html>
<!-- form.html -->
<html lang="en">
  <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <link rel="stylesheet" href="stylesheets/index.css">
      <!-- Add icon library -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <title>Login</title>
  </head> 
  <!--Header-->
  <header>
    <nav class="navbar py-0 fixed-top navbar-expand-md bg-light">
      <div class="container-fluid">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="../index.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../pages/about.html">About Me!</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../pages/contactus.html">My Works!</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../pages/form.php">Video Request</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../pages/welcome.php">Login</a>
          </li>
        </ul>
        <ul class="navbar-nav navbar-right">
          <li class="nav-item">
            <img src="../resources/images/branding/ParkerJahnHeader.png" alt="Parker Jahn Logo"
            width="200" height="90%">
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!--Header-->
  <body>
    <div class="row">
      <div class="col-md" style="height:100px">
      </div>
    </div>
    <form action="../scripts/insert.php" method="post" class="grid-item" name="videoRequest">
    <div class="row">
      <div class="col-md"></div>
      <div class="col-md" style="text-align: center;">  
            <p><?php session_start();
                require_once "config.php";
                if(empty($_SESSION["username"])){
                  echo "Please Login first to post.";
                } else{
                  echo $_SESSION["username"];
                } ?></p>    
            <label for="textBox">Write it here:</label><br>
            <textarea type="textarea" id="createPost" name="createPost"></textarea>
            <br><br>
      </div>
      <div class="col-md"></div>
    </div>
    <div class="row">
      <div class="col-md"></div>
      <div class="col-md" style="text-align: center;"> 
            <input type="submit" value="submit" onclick="testResults(this.form)">
            <input type="reset" value="Reset">
      </div>
      <div class="col-md"></div>
    </div>
  </form>
  </body>
</html>
