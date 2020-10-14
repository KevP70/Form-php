<?php
var_dump($_POST);
if(isset($_POST['submit'])){
$lastname = $_POST['lastname'];
$firstname = $_POST['firstname'];
}

$pdo = new PDO('mysql:host=mysql;dbname=basedetest;host=127.0.0.1', 'root', '', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);

$sql = "INSERT INTO user (lastname, firstname) VALUES ('$lastname', '$firstname')";

$pdo->exec($sql);

?>
