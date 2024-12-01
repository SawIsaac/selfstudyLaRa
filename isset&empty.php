<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="POST">
        <label for="">Username :</label>
        <input type="text" name="username">
        <label for="">Password :</label>
        <input type="password" name="password">
        <input type="submit" name="login" value="Login">
    </form>
</body>
</html>


<?php 
    //i sset() = return TRUE if a variable is declared andnot null
    // empty() = return TRUE if a variable is not declared, false, null

    foreach($_POST as $key => $value){
        echo "{$key} = {$value} <br>";
    }
    
    if(isset($_POST["login"])){
        $username = $_POST["username"];
        $password = $_POST["password"];

        if(empty($username)){
            echo "Username is missing";
        }elseif(empty($password)){
            echo "Password is missing";
        }
        else{
            echo "Hello {$username}";
        }
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="POST">
        <label for="">Username :</label>
        <input type="text" name="username">
        <label for="">Password :</label>
        <input type="password" name="password">
        <input type="submit" value="Login">
    </form>
</body>
</html>

<?php
    $input = [
        'username' => $_POST['username'] ?? '',
        'password' => $_POST['password'] ?? '',
    ];

    $errors = [];

    foreach($input as $key => $value){
        if(empty($input)){
            $errors[$key] = ucfirst($key) . "is missing.";
        }
    }
    if(!empty($errors)){
        foreach($errors as $error){
            echo $error . "<br>";
        }
    }else{
        echo "All input are valid";
    }

?>      