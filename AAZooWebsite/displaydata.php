<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include_once 'includes/dbh.inc.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>Display data</h1>
  <?php
  $dbh = new PDO('mysql:host=localhost;dbname=zoo;port=8889', 'zooadmin', 'zoopwd');

  $query = "SELECT * FROM animals";
  $statement = $dbh->prepare($query, array(PDO::FETCH_ASSOC));
  $statement->execute(array(':id' > 0));
  $result = $statement->fetchAll();
  foreach ($result as $animals) {
    echo $animals['name'] . "<br />";
  }

  include "search.php";
  include "insert.php";



  //  $query = "SELECT * FROM users";
  // $statement = $dbh->prepare($query, array(PDO::FETCH_ASSOC));$statement->execute(array(':id' > 0));
  // $result = $statement->fetchAll();
  // foreach ($result as $zoo) {    
  //  echo $zoo['username'] . "<br />";
  // }

  ?>
</body>

</html>