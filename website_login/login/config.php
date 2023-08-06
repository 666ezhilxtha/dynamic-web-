<?php
session_start();
$base_url = $_SERVER['DOCUMENT_ROOT']."/learning_php/website_login";
$root_url = "/learning_php/website_login";

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'user');
define("BASE_URL", $_SERVER['DOCUMENT_ROOT'] . "/learning_php/website_login/login");

$dbhost = DB_SERVER;
$dbuser = DB_USERNAME;
$dbpass = DB_PASSWORD;
$dbname = DB_DATABASE;
$conn = '';
try {
    $conn = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
//$conn = new PDO("mysql:host=$servername;dbname=learning", $username, $password);

