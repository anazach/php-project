<?php
class Dbh {

private $servername = "localhost";
private $username = "root";
private $password = "123";
private $dbName = "zoo";
private $charset = "utf8mb4";

public function connect() {

$dsn = "mysql:host=".$this->servername.";dbname=".$this->dbname.";charset=".$this->charset;
$pdo = new PDO($dsn, $this->username, $this->password);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
return $pdo;


// CHECK ERROR MSG
// $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// return $pdo;
// } catch (PDOException $e) {
//    echo "Connection error: ".$e->getMessage();
}
}