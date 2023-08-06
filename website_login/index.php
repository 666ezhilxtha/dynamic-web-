<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Dynamic Website</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
    <?php 
   
    
    ?>
    <header class="main">
        <nav>
            <a href="#" class="logo">
                <img src="img/logo1.png"/>
            </a>
           
            <ul class="menu">
                <li><a href="#" class="active">Home</a></li>
                <li><a href="#">Features</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
                <!-- <li class="login"><a href="#">login</a></li> -->

            </ul>

            <ul   class="login">
            <li ><a href="login/logout.php">sign out</a></li>  

            <li ><a href="login/login.php">sign in</a></li>  
            <li ><a href="login/registration.php">sign up</a></li>  
        
        
        </ul>

        </nav>
        <div class="main-heading">
            <h1>Create Prespectives With Virtual Reality</h1>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sint provident consectetur ducimus. Blanditiis, culpa!</p>
            
            <a class="main-btn" href="#">Contact</a>
        </div>
    </header>

    <section class="features">
        <div class="feature-container">

            <div class="feature-box">
                <div class="f-img">
                    <img src="img/info-icon1.png"/>
                </div>
                <div class="f-text">
                    <h4>Web Development</h4>
                    <p>Lorem ipsum dolor sit amet.</p>
                    <a href="#" class="main-btn">Check</a>
                </div>
            </div>

            <div class="feature-box">
                <div class="f-img">
                    <img src="img/info-icon2.png"/>
                </div>
                <div class="f-text">
                    <h4>Software Development</h4>
                    <p>Lorem ipsum dolor sit amet.</p>
                    <a href="#" class="main-btn">Check</a>
                </div>
            </div>

            <div class="feature-box">
                <div class="f-img">
                    <img src="img/info-icon3.png"/>
                </div>
                <div class="f-text">
                    <h4>Cloud Hosting</h4>
                    <p>Lorem ipsum dolor sit amet.</p>
                    <a href="#" class="main-btn">Check</a>
                </div>
            </div>
        </div>
    </section>

    <section class="about">
        <div class="about-img">
            <img src="img/about.png">
        </div>
        <div class="about-text">
            <h2>Start Tracking Your Statistics</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad cumque eum quia magni, voluptatibus nesciunt vero. Reprehenderit fugiat soluta ullam praesentium, omnis autem voluptatibus quae.</p>
            <button class="main-btn">Read More</button>
        </div>
    </section>

    <footer class="contact">
<div class="contact-heading">
    <h1>Contact Us</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
</div>
<!-- <form action="add.php" method="post">
    <input type="text" name="user" placeholder="Your Full Name"/>
    <input type="email" name="email" placeholder="Your E-Mail"/>
    <textarea name="message" placeholder="Type Your Message Here.........."></textarea>
    <button class="main-btn contact-btn" type="submit">Continue</button>
</form> -->
<?php include("add.php");?>
</footer>
<!-- if($stmt){
    header('location:index.php');
}else{
    echo "sql error";
} -->
  
</body>
</html>