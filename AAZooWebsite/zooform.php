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

</body>

</html>