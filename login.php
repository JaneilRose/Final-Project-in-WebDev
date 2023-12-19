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
    <script src="login.js"></script>
    <title>Login | LeafyLoom🍃</title>
</head>
<body>
    <div class="container">
        <div class="header">
            <img src="LeafyLoom (1).png" class="logo">
            <div class="navbar"><hr><br>
                <a href="homepage.html">HOME</a>
                <a href="about1.html">ABOUT US</a>
                <a href="stories.html">STORIES</a>
                <a href="commu.html">COMMUNITY</a><br><br>
                <hr>
            </div>
        </div>
    </div>
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
</body>
</html>