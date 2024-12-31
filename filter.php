<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label for="">Name :</label>
        <input type="text" name="name">
        <label for="">age :</label>
        <input type="number" name="age">
        <label for="">email :</label>
        <input type="email" name="email">
        <input type="submit" name="login" value="Login">
    </form>
</body>
</html>

<?php
    // if(isset($_POST['login'])){
    //     $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_SPECIAL_CHARS);
    //     $age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_SPECIAL_CHARS);
    //     $email = filter_input(INPUT_POST, "email",FILTER_SANITIZE_SPECIAL_CHARS);
    // }
    if(isset($_POST['login'])){
        $age = filter_input(INPUT_POST,"age",FILTER_VALIDATE_INT);
    }
    echo "You name is $age <br>";
    echo "Your double name is $age";
?>