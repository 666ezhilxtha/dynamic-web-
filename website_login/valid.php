<?php
    $errors = [];
    $user = "";
    $email ="";
    $message ="";
    // checks if the current request if post or not
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $user = htmlspecialchars($_POST['user']);
        $email = htmlspecialchars($_POST['email']);
        $email_pattern = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";
        $message = htmlspecialchars($_POST['message']);
        //strlen()
        if (strlen($user) == 0) {
            $errors['user'] = "Please provide your user!";
        }

        if (strlen($email) == 0) {
            $errors['email'] = "Please provide your email!";
        } else if (!preg_match($email_pattern, $email)) {
            $errors['email'] = "Please provide your email in correct formate!";
        }

      

        // if (strlen($age) == 0) {
        // } else if ($age <= 0) {
        //     $errors['age'] = "Please provide your age!";
        // }
    }

    ?>
 