<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
//include_once 'includes/dbh.inc.php';
?>

<html>

<head>
  <title>Search animals</title>
</head>

<body>
  <h1>Search in database</h1>
  <?php
  $mysqli = new MySQLi('localhost', 'zooadmin', 'zoopwd', 'zoo', '8889');
  $resultSet = $mysqli->query("SELECT DISTINCT category FROM animals");
  ?>
  <select>
    <?php
    while ($rows = $resultSet->FETCH_ASSOC()) {
      $categoryName = $rows['category'];
      echo "<option value='$categoryName'>$categoryName</option>";
    }
    ?>
  </select>


</body>

</html>