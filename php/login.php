<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <form action="php/login.php" method="GET">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username"><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password"><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>

<?php
    include 'php/back.php';
    if($_SERVER["REQUEST_METHOD"]=="GET"){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query="SELECT * FROM `purchase` WHERE `email` = '$username' AND `password` = '$password'";
    if ($username == 'admin' && $password == 'admin') {
        header("Location: contact.html");
    } else {
        echo "Invalid username or password";
    }
    }
?>