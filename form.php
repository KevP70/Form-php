<?php
var_dump($_POST);
if(isset($_POST['submit'])){
$lastname = $_POST['lastname'];
$firstname = $_POST['firstname'];
$email = $_POST['email'];
$adress = $_POST['adress'];
$city = $_POST['city'];
$country = $_POST['country'];
}

$pdo = new PDO('mysql:host=mysql;dbname=basedetest;host=127.0.0.1', 'root', '', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);

$sql = "INSERT INTO user (lastname, firstname, email, adress, city, country) VALUES ('$lastname', '$firstname', '$email', '$adress', '$city', '$country')";

$pdo->exec($sql);

?>
