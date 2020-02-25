<?php
  include "database.php";
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="dist/app.css">
    <title></title>
  </head>
  <body>
    <header>
      <div class="wrapper">
        <a href="#"><img src="https://media.ilsoftware.it/images/500x500/img_19519.jpg" alt=""></a>
      </div>
    </header>
    <main>
      <div class="wrapper">
        <div class="disks">
          <?php foreach ($database as $value): ?>
            <div class="disk">
              <ul>
                <li> <img src="<?php echo $value["poster"] ?>" alt=""> </li>
                <li> <h3><?php echo $value["title"] ?></h3>  </li>
                <li class="author"> <?php echo $value["author"] ?> </li>
                <li> <?php echo $value["year"] ?> </li>
              </ul>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </main>
  </body>
</html>
