<?php


$connection = mysqli_connect('localhost:3306','root');

mysqli_select_db($connection,"infodata");

$user = $_POST['user'];
$email = $_POST['email'];
$message = $_POST['message'];

$query = "INSERT INTO 'infodata'('user','email','message') VALUES ('$user','$email','$message') ";

mysqli_query($connection,$query);


?>