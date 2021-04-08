<?php 
   require('includes/dbh.inc.php');
   ini_set('display_errors');
   ini_set('display_startup_errors');
   error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
<h1>Home Page</h1>
<?php 
   include "search.php";
   include "insert.php";
   include "displaydata.php";
?>
</body>
</html>