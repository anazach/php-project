<?php

include_once 'includes/dbh.inc.php'
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

    <?php
    $query = "SELECT * FROM animals";
    ?>

    </div>

    </div>
    <div class="container mt-5">
        <table class="table table-hover">
            <thead>
                <tr class="bg-warning">
                    <th scope="col"></th>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Category</th>
                    <th scope="col">Birthday</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($dbh->query($query) as $zoo) { ?>
                    <tr>
                        <th scope="row"></th>
                        <td><?php echo $zoo['id'] ?></td>
                        <td><?php echo $zoo['name'] ?></td>
                        <td><?php echo $zoo['category'] ?></td>
                        <td><?php echo $zoo['birthday'] ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <center>
        <div class="input-container">
            <form method='post' action='' enctype='multipart/form-data'>
                <label>Name:</label>
                <input type="text" name="name" required="required" placeholder="Name of the animal" />
                <input type='file' name='files[]' multiple />
                <input type='submit' value='Submit' name='submit' />
            </form>
        </div>
    </center>
    <?php

    if (isset($_POST['submit'])) {

        // Count total files if submit button is POST
        $countfiles = count($_FILES['files']['name']);

        // Prepared statement INSERT
        $query = "INSERT INTO animals (name,image) VALUES(?,?)";

        $statement = $dbh->prepare($query);

        // Loop all files
        for ($i = 0; $i < $countfiles; $i++) {

            // File name - here difined
            $filename = $_FILES['files']['name'][$i];

            // Location - here difined
            $target_file = 'upload/' . $filename;

            // file extension - for path
            $file_extension = pathinfo($target_file, PATHINFO_EXTENSION);
            $file_extension = strtolower($file_extension);

            // Valid image extension
            $valid_extension = array("png", "jpeg", "jpg");

            if (in_array($file_extension, $valid_extension)) {

                // Upload file
                if (move_uploaded_file($_FILES['files']['tmp_name'][$i], $target_file)) {

                    // Execute query
                    $statement->execute(array($filename, $target_file));
                }
            }
        }
        echo "File upload successfully";
    }
    ?>
</body>

</html>