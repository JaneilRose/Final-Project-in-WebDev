<?php

$is_success = false;

if ($_SERVER["REQUEST_METHOD"] === "POST"){
    $mysqli = require __DIR__. "/database.php";

    $sql = "INSERT INTO user (name, email, password) VALUES (?,?,?)";

    $stmt = $mysqli->stmt_init();

    if ( ! $stmt->prepare($sql)){
        die("SQL error: ". $mysqli->error);
    }

    $stmt->bind_param("sss",
                        $_POST["name"],
                        $_POST["email"],
                        $_POST["password"]);

    if ($stmt->execute()){
        $is_success = true;
        header ("location: homepage.php");
    }
    else{
        die($mssqli->error. " " . $mysqli->errno);
    }
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="homepage.css"/>
    <script src="login.js"></script>
    <title>Register | LeafyLoom🍃</title>
</head>
<body>
    <div class="container">
        <div class="header">
            <img src="LeafyLoom (1).png" class="logo">
        </div>
    </div>
    <form class="register" id="login1" method="post">
        <h1>Register</h1><br>
        <label for="name">Enter username:</label>
        <input type="text" id="username" name="name" autocomplete="off" required>
        <br>
        <br>
        <label for="email">Enter email:</label><br>
        <input type="text" id="email" name="email" autocomplete="off" required>
        <br>
        <br>
        <label for="password">Enter password:</label>
        <input type="password" id="password" name="password" autocomplete="off" required>
        <br><br>
        <label for="password">Re-enter password:</label>
        <input type="password" id="password" autocomplete="off" required>
        <br><br>
        <button
        >Create Account</button>
    </form>
</body>
</html>