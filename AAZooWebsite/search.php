<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include_once 'includes/dbh.inc.php';
?>

<html>

<head>
  <title>Search animals</title>
</head>

<body>
<h1>Search in database</h1>
 <?php
  $query = "SELECT DISTINCT category FROM animals";
  $stmt = $dbh->prepare($query, array(PDO::FETCH_ASSOC));$stmt->execute(array(':id' > 0));
  $result = $stmt->fetchAll();
  ?>
  <form action="query.php" method="POST">
 <select name="animals">
<?php foreach ($result as $row): ?>
    <option><?=$row["category"]?></option>
<?php endforeach ?>
</select>
  <button type="submit">Search</button>
</form>
</body>
</html>

