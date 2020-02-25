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
      <li> Title: <?php echo $value["title"] ?> </li>
        <ul>
          <li> Author: <?php echo $value["author"] ?> </li>
          <li> Year: <?php echo $value["year"] ?> </li>
          <li><img src="<?php echo $value["poster"] ?>" alt=""> </li>
        </ul>
      </li>
      <?php endforeach; ?>
    </ul>

  </body>
</html>
