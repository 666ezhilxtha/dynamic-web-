<?php
include_once("config.php");
$errorMsgReg = '';

/* User Registration */
function userRegistration($email, $password, $name)
{
    global $conn;
    try {
        $st = $conn->prepare("SELECT * FROM data WHERE email=:email");
        $st->bindParam("email", $email);
        $st->execute();
        $st->setFetchMode(PDO::FETCH_ASSOC); // fetch the output in form of associative array
        $count = $st->rowCount();
        if ($count < 1) {
            $stmt = $conn->prepare("INSERT INTO data (email,password,name) VALUES (:email,:hash_password,:name)");
            $stmt->bindParam("email", $email, PDO::PARAM_STR);
            $hash_password = hash('sha256', $password); //Password encryption
            $stmt->bindParam("hash_password", $hash_password, PDO::PARAM_STR);
            $stmt->bindParam("name", $name, PDO::PARAM_STR);
            $stmt->execute();
            $uid = $conn->lastInsertId(); // Last inserted row id
            $_SESSION['uid'] = $uid;
            return true;
        } else {
            return false;
        }
    } catch (PDOException $e) {
        echo '{"error":{"text":' . $e->getMessage() . '}}';
    }
}
/* Signup Form */
if (!empty($_POST['signupSubmit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $name = $_POST['name'];
    /* Regular expression check */
    $email_check = preg_match('~^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.([a-zA-Z]{2,4})$~i', $email);
    $password_check = preg_match('~^[A-Za-z0-9!@#$%^&*()_]{6,20}$~i', $password);

    if ($email_check && $password_check && strlen(trim($name)) > 0) {
        $uid = userRegistration($email, $password, $name);
        if ($uid) {
            header("Location: $root_url/index.php"); // Page redirecting to home.php 
        } else {
            $errorMsgReg = "Username or Email already exists.";
        }
    }
} ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>dynamic website signup</title>
</head>

<body>
    <div id="signup">
        <h3>Registration</h3>
        <form method="post" action="registration.php" name="signup">
            <label>Name</label>
            <input type="text" name="name" autocomplete="off" />
            <label>Email</label>
            <input type="text" name="email" autocomplete="off" />
            <label>Password</label>
            <input type="password" name="password" autocomplete="off" />
            <div class="errorMsg"><?php echo $errorMsgReg; ?></div>

            <div style="display: flex;">
                <input type="submit" class="button" name="signupSubmit" value="Signup">
                <a href="login.php" class="button" style="margin-left: auto; height:17px;">LogIn</a>
            </div>
        </form>
    </div>
</body>

</html>