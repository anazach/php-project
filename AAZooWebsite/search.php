<html>
<head>
<title>Search animals</title>
</head>
<body>
<h1>Search in database</h1>
 <?php
      $mysqli = NEW MySQLi('localhost', 'root', '123', 'zoo');
      $resultSet = $mysqli->query("SELECT DISTINCT category FROM animals");
      ?>
  <select>
  <?php
while ($rows = $resultSet-> FETCH_ASSOC()) {
   $categoryName = $rows['category'];
   echo "<option value='$categoryName'>$categoryName</option>";
  }
?>
</select>


</body>
</html>