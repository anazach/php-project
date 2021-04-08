<?php
// Slå på all felrapportering. Bra under utveckling, dåligt i produktion.
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$dbh = new PDO('mysql:host=localhost;dbname=zoo;port=8889;charset=UTF8', "zooadmin", "zoopwd");

//  class Dbh
//  {

//     private $servername = "localhost";
//     private $username = "zooadmin";
//     private $password = "zoopwd";
//     private $dbName = "zoo";
//     private $charset = "utf8mb4";
//     private $dbport = "8889";
//      public function connect()
//      {

//          $dsn = "mysql:host=" . $this->servername . ";dbname=" . $this->dbname . ";dbport=" . $this->dbport . ";charset=" . $this->charset;
//         $pdo = new PDO($dsn, $this->username, $this->password);
//          $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        
//          return $pdo; -->



//         // CHECK ERROR MSG
// //         // $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// //         // return $pdo;
// //         // } catch (PDOException $e) {
// //         //    echo "Connection error: ".$e->getMessage();
//    }
//  }
