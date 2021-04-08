<?php
include "includes/dbh.inc.php";
include 'adminpanel.php';
include 'zooform.php';
?>
<html>

<head>
    <title>Add animals</title>
    <link rel="stylesheet" href="style/style.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style/style.css">
</head>

<body>

    <div id="addAnimal">
        <h2 class="animal-title">Add Animals</h2>
        <form action="" method="post">
            <label>Name:</label>
            <input type="text" name="name" required="required" placeholder="Name of the animal" /><br /><br />
            <label>Category:</label>
            <input type="text" name="category" required="required" placeholder="Category" /><br /><br />
            <label>Birthday:</label>
            <input type="text" name="birthday" required="required" placeholder="Birth date" /><br /><br />
            <input type="submit" value="Add animal" name="submit" /><br />
        </form>
    </div>

    <?php
    if (isset($_POST["submit"])) {
        try {
            $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // <== add this line
            $sql = "INSERT INTO animals (name, category, birthday)
VALUES ('" . $_POST["name"] . "','" . $_POST["category"] . "','" . $_POST["birthday"] . "')";
            if ($dbh->query($sql)) {
                echo "Inserted Successfully";
            } else {
                echo "Data not successfully Inserted.";
            }

            $dbh = null;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    ?>

</body>

</html>