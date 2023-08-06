<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add user</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>




<form action="src/added.php" method="post">
    <input type="text" name="user" placeholder="Your Full Name"  />

    <input type="email" name="email" placeholder="Your E-Mail"/>
    <textarea name="message" placeholder="Type Your Message Here.........."></textarea>
    <button class="main-btn contact-btn" type="submit">Continue</button>
</form>

    
    <!-- <form action="add.php" method="POST">
        Name:  <input type="text" name="name" id="name" value="<?php if (isset($_POST['name'])) echo $_POST ['name'];?>"> <br>
        <br>
        <p style="color:red">
        <?php
        if (isset($errors['name'])) echo $errors ['name'];
        ?>
    </p>
        email: <input type="email" name="email" id="email" value="<?php if (isset($_POST['email'])) echo $_POST ['email'];?>"><br>
        <p style="color:red">
        <?php
        if (isset($errors['email'])) echo $errors ['email'];
        ?>

    </p>

    password: <input type="passwordt" name="password" id="password" value="<?php if (isset($_POST['password'])) echo $_POST ['password'];?>"><br>
        <p style="color:red">
        <?php
        if (isset($errors['password'])) echo $errors ['password'];
        ?>
        </p>
        <br>
        age: <input type="number" name="age" value="<?php if (isset($_POST['age'])) echo $_POST ['age'];?>"><br>
        <p style="color:red">
        <?php
        if (isset($errors['age'])) echo $errors ['age'];
        ?>
    </p>

        <button>submit</button>
    </form> -->
</body>
</html>