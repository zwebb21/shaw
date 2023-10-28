<?php 
$dsn = "mysql:host=localhost;dbname=shaw"; //here you put localhost
$dbusername = "root"; //xamp use root
$dbpassword = "";//write root if using mac computer. windows yoy

try {

$pdo = new PDO($dsn,$dbusername,$dbpassword);
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e){

echo "Connection Failed: ". $e->getMessage();


}