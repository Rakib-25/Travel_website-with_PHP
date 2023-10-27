<?php
session_start;
?>
<html>
    <head>
        <link rel="stylesheet" href="login.css">
    </head>
    <body>
        <div class="login">
            <h2>log in info</h2>
            <form action ="http://localhost/TourismManagementSystem/home.php" method = "post">
                <label>username / email :</label>
                 <input type="text" name="email" placeholder="abc@gmail.com">
               <label>password :</label>
                <input type="password" name="password" id="password" placeholder="********">
                <div class="content">
                <a href="homepage.html"><button type="submit" name="login"> <span></span> log in</button></a>
            </div>
        </form>
        </div>
    </body>
</html>