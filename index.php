<?php
  include "database.php";
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <ul>
      <?php foreach ($database as $key => $value): ?>
        <li>
          <ul>
            <li> <?php echo $value["title"] ?> </li>
            <li> <?php echo $value["author"] ?> </li>
            <li> <?php echo $value["year"] ?> </li>
            <li> <?php echo $value["poster"] ?> </li>
          </ul>
        </li>
      <?php endforeach; ?>
    </ul>

  </body>
</html>
