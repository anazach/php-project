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
$dbh = new PDO('mysql:host=localhost;dbname=zoo', zooadmin, zoopwd);

  $query = "SELECT * FROM animals";
  $statement = $dbh->prepare($query, array(PDO::FETCH_ASSOC));$statement->execute(array(':id' > 0));
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
 
 
