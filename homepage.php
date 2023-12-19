<?php

$is_invalid = false;

if ($_SERVER["REQUEST_METHOD"] === "POST"){
    $mysqli = require __DIR__. "/database.php";

    $sql = sprintf("SELECT * FROM user
            WHERE email = '%s'",
            $mysqli->real_escape_string($_POST["email"]));

    $result = $mysqli->query($sql);
    session_start();

    $user = $result->fetch_assoc();

    if ($user) {
       if ( $_POST["password"] == $user["password"]){

        session_start();

        $_SESSION["user_id"] = $user["id"];

        header("Location: homepage1.html");

       } 
    }

    $is_invalid = true;  
    
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="homepage.css"/>
    <title>LeafyLoom | A Forest of Stories🍃</title>
</head>
<body>
    <div class="container">
        <div class="header">
            <img src="LeafyLoom (1).png" class="logo">
            <form class="login" id="login1" method="post">
                <h1>LOGIN</h1>
                <br>
                <label for="email">Username</label>
                <input type="text" id="email" name="email" autocomplete="off" required>
                <br>
                <br>
                <label for="password">Password</label>
                <input type="password" id="password" name="password" autocomplete="off" required>
                <br><br>
                <button>Login</button>
                <br>
                <br>
                <p class="link" onclick="register()"><h5>Don't have an account? <a href="register.php">Register Now.</a></h5></p>
            </form>
        </div>
        <div class="content">
                <form>
                <br><h1>Welcome to LeafyLoom🍃</h1><br>
                <h2>Your Gateway to Boundless Stories!</h2><br><br>
                <form>
        </div>
    </div>
</body>
    <script>
            function hide(){
                document.getElementById("hide").style.display = "none";
            }


        </script>
</html>