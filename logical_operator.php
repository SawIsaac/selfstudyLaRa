<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logical operator </title>
</head>
<body>
    <form action="index.php" method="POST">
        <label for="username">Username :</label>
        <input type="text" name="username">
        <label for="password">Password :</label>
        <input type="password" name="password">
        <input type="submit" value="Log In">
    </form>
</body>
</html>

<?php
    $username = $_POST["username"] ?? '';
    $password = $_POST["password"] ?? '';

    // $valid_username = "admin";
    // $valid_password = 1234;

    // if($username != $valid_username){
    //     echo "Username incorrect";
    // }else if($password != $valid_password){
    //     echo "Password incorrect";
    // }else if($username == $valid_username || $password == $valid_password){
    //     echo "Login Successful";

    // }else{
    //     echo "Cannot Login.";
    // }

    echo ($username === "admin" && $password ==1234)
    ? "Login Successful" : ($username !== "admin" ? "Username incorrect" : "Password incorrect");
?>