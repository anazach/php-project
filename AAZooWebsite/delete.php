<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include_once 'includes/dbh.inc.php';
include 'adminpanel.php'

?>

<html>

<head>
    <title>Delete animals</title>
    <link rel="stylesheet" href="style/style.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>

<body>
    <div id="addAnimal">
        <h2>Delete Animals</h2>
        <form action="" method="post">
            <label>Id:</label>
            <input type="text" name="id" placeholder="Enter Id number" /><br />
            <label>Name:</label>
            <input type="text" name="name" required="required" placeholder="Name of the animal" /><br />
            <label>Category:</label>
            <input type="text" name="category" required="required" placeholder="Category" /><br />
            <label>Birthday:</label>
            <input type="text" name="birthday" required="required" placeholder="Birth date" /><br />
            <button type="submit" name="delete">Delete animal</button><br />
        </form>
    </div>

    <?php

    if (isset($_POST['delete'])) {
        $id = $_POST['id'];
        // $name = $_POST['name'];
        // $category = $_POST['category'];
        // $birthday = $_POST['birthday'];

        $pdoQuery = "DELETE FROM animals WHERE id=:id";
        $pdoQuery_run = $dbh->prepare($pdoQuery); //prepare the query and connect to database
        $pdoQuery_exec = $pdoQuery_run->execute(array(":id" => $id)); // run the query

        if ($pdoQuery_exec) {
            echo '<script>alert ("Data deleted Successfully")</script>';
        } else {
            echo '<script>alert ("Data has not been deleted")</script>';
        }
    }
    ?>
</body>

</html>