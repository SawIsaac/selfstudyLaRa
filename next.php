 <?php 
session_start();
// if(isset($_SESSION['username']) && isset($_SESSION['password'])){
//     $username = $_SESSION['username'];
//     $password = $_SESSION['password'];
// }else{
//     $username = null;
//     $password = null;
// }
// if(isset($_POST['click'])){
//     $vUsername = $_POST['vUsername'];
//     $vPassword = $_POST['vPassword'];

//     if($vUsername == $username && $vPassword == $password){
//         echo "Login Successful!";
//     }else{
//         echo "Login Fail";
//     }
// }
?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Login Page</h1>
    <form action="next.php" method="POST">
        <label for="">Username :</label>
        <input type="text" name="vUsername">
        <label for="">Password :</label>
        <input type="password" name="vPassword">
        <input type="submit" name="click" value="Login">
    </form>
    <a href="next1.php">Back to Signup Page</a>
</body>
</html>  -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    This is the home page.
    <form action="next.php" method="POST">
        <input type="submit" name="logout" value="logout">
    </form>
</body>
</html>


<?php
    if(isset($_POST["logout"])){
        session_destroy();
        header("Location: session.php");
    }
?>
