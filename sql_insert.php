<?php
    include("database.php");
    $username = "Kontlo";
    $password = "keeperofthelight";
    $hash = password_hash($password, PASSWORD_DEFAULT);


    $sql = "INSERT INTO users (user, password) 
            VALUES ('$username', '$hash')";
    try{
        mysqli_query($conn, $sql);
        echo "User is now Register";
    }
    catch(mysqli_sql_exception){
        echo "Could not register";
    }

    mysqli_close($conn);
?>