<?php
// class Dbh {

// private $servername = "localhost";
// private $username = "root";
// private $password = "123";
// private $dbName = "zoo";
// private $charset = "UTF8";
// private $port = "8889";

// public function connect() {

// $dbh = "mysql:host=".$this->servername.";dbname=".$this->dbname.";charset=".$this->charset.";port=".$this->port;
// $pdo = new PDO($dbh, $this->username, $this->password);
// $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
// return $pdo;


// CHECK ERROR MSG
// $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// return $pdo;
// } catch (PDOException $e) {
//    echo "Connection error: ".$e->getMessage();
// }
// }

$dbh = new PDO('mysql:host=localhost;dbname=zoo;charset=UTF8;port=8889', 'zooadmin', 'zoopwd');