<?php
  include "database.php";
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="dist/app.css">
    <title></title>
  </head>
  <body>
    <header>
      <div class="wrapper">
      </div>
    </header>
    <main>
      <div class="wrapper">
        <div class="disks">
          <?php foreach ($database as $value): ?>
            <ul class="disk">
              <li> <img src="<?php echo $value["poster"] ?>" alt=""> </li>
              <li> Title: <?php echo $value["title"] ?> </li>
              <li> Author: <?php echo $value["author"] ?> </li>
              <li> Year: <?php echo $value["year"] ?> </li>
            </ul>
          <?php endforeach; ?>
        </div>
      </div>
    </main>




  </body>
</html>
