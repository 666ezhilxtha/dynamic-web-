<?php
include('config.php');
$session_uid = '';
$_SESSION['uid'] = '';
if (empty($session_uid) && empty($_SESSION['uid'])) {
    $url = 'login.php';
    header("Location: $url");
    //echo "<script>window.location='$url'</script>";
}
