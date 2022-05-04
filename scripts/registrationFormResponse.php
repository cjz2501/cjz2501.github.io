<?php
//registrationFormResponse.php
?>
  <body>
    <header>
      <?php
      include("../scripts/connectToDatabase.php");
      ?>
    </header>
    <main>
      <article class="Registration">
        <?php
        include("../scripts/registrationFormProcess.php");
        ?>
      </article>
    </main>
  </body>
</html>
