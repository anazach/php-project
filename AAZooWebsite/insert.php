<?php
include "includes/dbh.inc.php";
?>
<html>
<head>
<title>Add animals</title>
<link rel="stylesheet" href="style/style.css">
</head>
<body>
<div id="addAnimal">
<h2>Add Animals</h2>
<form action="" method="post">
<label>Name:</label>
<input type="text" name="name" required="required" placeholder="Name of the animal"/><br /><br />
<label>Category:</label>
<input type="text" name="category" required="required" placeholder="Category"/><br/><br />
<label>Birthday:</label>
<input type="text" name="birthday" required="required" placeholder="Birth date"/><br/><br />

 <div class="row mt-4">
        <form action="upload.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="file">
        <button type="submit" name="uplad">Upload</button>
        </form>
    </div>
<input type="submit" value="Add animal" name="submit"/><br />
</form>
</div>

<?php
if(isset($_POST["submit"])){
try {
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // <== add this line
$sql = "INSERT INTO animals (name, category, birthday)
VALUES ('".$_POST["name"]."','".$_POST["category"]."','".$_POST["birthday"]."')";
if ($dbh->query($sql)) {
echo "Inserted Successfully";
}
else{
echo "Data not successfully Inserted.";
}

$dbh = null;
}
catch(PDOException $e)
{
echo $e->getMessage();
}

}
?>
</body>
</html>