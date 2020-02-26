<?php
  include "database.php";

  $author = $_GET["author"];

  if (empty($author) || $author === "All") {
    header('Content-Type: application/json');

    echo json_encode($database);
  } else {
    $databaseFilter = [];
    foreach ($database as $disk) {
      if ($disk["author"] == $author) {
        $databaseFilter[] = $disk;
      }
    }
    header('Content-Type: application/json');

    echo json_encode($databaseFilter);
  }
