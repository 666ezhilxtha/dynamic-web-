<?php

include_once("config.php");
include_once('user.php');




function userLogin($email, $password)
{
    global $conn;
    try {
        $hash_password = hash('sha256', $password); //Password encryption
        $stmt = $conn->prepare("SELECT id FROM data WHERE email=:email AND password=:hash_password");
        $stmt->bindParam("email", $email, PDO::PARAM_STR);
        $stmt->bindParam("hash_password", $hash_password, PDO::PARAM_STR);
        $stmt->execute();
        $count = $stmt->rowCount();
        $data = $stmt->fetch(PDO::FETCH_OBJ);
        if ($count) {
            $_SESSION['uid'] = $data->id; // Storing user session value
            return true;
        } else {
            return false;
        }
    } catch (PDOException $e) {
        echo '{"error":{"text":' . $e->getMessage() . '}}';
    }
}
$errorMsgLogin = '';
/* Login Form */
if (!empty($_POST['loginSubmit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    if (strlen(trim($email)) > 1 && strlen(trim($password)) > 1) {
        $uid = userLogin($email, $password);
        if ($uid) {
            $url = $root_url;
            header("Location: $url/index.php"); // Page redirecting to home.php 
        } else {
            $errorMsgLogin = "Please check login details.";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
    

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Dynamic website</title>
</head>

<body >
    <div class="para">
   <p >
    <h1>welcome in the login page </h1>
    <h4>login and enjoy your day</h4>
   </p>
   </div>
    <div style="width: 100%;">
        <div id="login">
            <h3>Login</h3>
            <form method="post" action="login.php" name="login">
                <label>Email</label>
                <input type="text" id="em"  name="email" autocomplete="off" />
                <label>Password</label>
                <input type="password" name="password" autocomplete="off" />
                <div class="errorMsg">
                    <?php echo $errorMsgLogin; ?>
                </div>
                <div style="display: flex;">
                    <input type="submit" class="button" name="loginSubmit" value="Login">
                    <a href="registration.php" class="button" style="margin-left: auto; height:17px;">Register</a>
                </div>
            </form>
        </div>
    </div>


    



</body>

</html>