 <?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    include_once 'includes/dbh.inc.php';
    include 'adminpanel.php'

    ?>

 <div class="row mt-4">
     <form action="upload.php" method="POST" enctype="multipart/form-data">
         <input type="file" name="file">
         <button type="submit" name="upload">Upload</button>
     </form>
 </div>