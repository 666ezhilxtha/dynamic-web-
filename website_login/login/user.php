<?php
/* User Login */
$base_url = $_SERVER['DOCUMENT_ROOT'] . "/learning_php/website_login/login";
include_once("$base_url/config.php");



/* User Details */
function userDetails($uid)
{
    global $conn;
    try {
        $stmt = $conn->prepare("SELECT email,name FROM data WHERE id=:id");
        $stmt->bindParam("id", $uid, PDO::PARAM_INT);
        $stmt->execute();
        $data = $stmt->fetch(PDO::FETCH_OBJ); //User data
        return $data;
    } catch (PDOException $e) {
        echo '{"error":{"text":' . $e->getMessage() . '}}';
    }
}
