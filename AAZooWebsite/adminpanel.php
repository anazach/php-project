<?php
include_once 'includes/dbh.inc.php'
?>


<!DOCTYPE html>
<html>
<title>Admin panel</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<link rel="stylesheet" href="footer.css">

<body>

    <!-- Sidebar -->
    <div class="w3-sidebar w3-bar-block w3-border-right" style="display:none" id="mySidebar">
        <button onclick="w3_close()" class="w3-bar-item w3-large">Close &times;</button>
        <a href="index.php" class="w3-bar-item w3-button">Home</a>
        <a href="insert.php" class="w3-bar-item w3-button">Insert</a>
        <a href="search.php" class="w3-bar-item w3-button">Search</a>
        <a href="update.php" class="w3-bar-item w3-button">Update</a>
        <a href="delete.php" class="w3-bar-item w3-button">Delete</a>
        <a href="upload.php" class="w3-bar-item w3-button">Upload journal</a>
    </div>

    <!-- Page Content -->
    <div class="w3-pale-yellow">
        <button class="w3-button w3-pale-yellow w3-xlarge" onclick="w3_open()">☰</button>
        <div class="w3-container" style="width:15%">
            <h2 class="w3-pale-yellow">Admin Panel</h2>
        </div>
    </div>

    <?php
    //include 'zooform.php';
    ?>


    <script>
        function w3_open() {
            document.getElementById("mySidebar").style.display = "block";
        }

        function w3_close() {
            document.getElementById("mySidebar").style.display = "none";
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>


    <!-- Copyrights 
    <div class="footer">
        <p>© 2021 Zookeepers All rights reserved.</p>
    </div>
    -->

</body>

</html>