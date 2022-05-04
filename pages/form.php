<!DOCTYPE html>
<!-- form.html -->
<html lang="en">
  <head>
    <script src="../scripts/form.js"></script>
    <meta charset="utf-8">
    <title>Nature's Source - Video Request</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="stylesheets/form.css">
  </head>
  <body>
    <div class="links">
      <table class="links">
        <tr>
          <td colspan="5">
            <img src="../images/ParkerJahn.PNG" alt="Nature's Source"
                width="auto" height="auto">
          </td>
        </tr>
        <tr>
          <td><a href="../index.html">Home</a></td>
          <td><a href="contactus.html">Contact Us</a></td>
          <td><a href="about.html">About Us</a></td>
        </tr>
      </table>
    </div>
    <div class="grid-container">
      <form class="grid-item" name="videoRequest">
        <div class="grid-item">
          <label for="fname">
            <?php
            $link = mysqli_connect("localhost", "root", "root", "parker_database", 3307);
            if($link === false){
              die("ERROR: Could not connect. " . mysqli_connect_error());
            }

            echo "Connect Successfully. Host info: " . mysqli_get_host_info($link);

            mysqli_close($link);
            ?>
          </label><br>
          <input type="text" id="fname" name="fName"><br>
        </div>
        <div class="grid-item">
          <label for="lname">Last Name: </label><br>
          <input type="text" id="lname" name="lName"><br>
        </div>
        <div class="grid-item">
          <label for="idea">Original Idea:</label><br>
          <input type="checkbox" id="idea" name="idea"><br>
        </div>
        <div class="grid-item">
          <label for="textBox">Write it here:</label><br>
          <textarea type="textarea" id="videoIdea" name="videoIdea"></textarea>
          <br><br>
        </div>
        <div class="grid-item">
          <input type="submit" value="submit" onclick="testResults(this.form)">
          <input type="reset" value="Reset">
        </div>
      </form>
    </div>
  </body>
</html>
