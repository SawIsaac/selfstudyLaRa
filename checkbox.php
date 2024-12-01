<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <form action="index.php" method="POST">
        <input type="checkbox" id="p" name="pizza" value="Pizza"> 
        <label for="p">Pizza</label> <br>
        <input type="checkbox" id="ham" name="hamburger" value="Hamburger"> 
        <label for="ham">Hamburger</label> <br>
        <input type="checkbox" id="hot" name="hotdog" value="Hotdog"> 
        <label for="hot">Hotdog</label> <br>
        <input type="checkbox" id="t" name="taco" value="Taco"> 
        <label for="t">Taco</label><br>
        <input type="submit" name="submit">
    </form> -->
    <form action="index.php" method="POST">
        <input type="checkbox" id="p" name="foods[]" value="Pizza"> 
        <label for="p">Pizza</label> <br>
        <input type="checkbox" id="ham" name="foods[]" value="Hamburger"> 
        <label for="ham">Hamburger</label> <br>
        <input type="checkbox" id="hot" name="foods[]" value="Hotdog"> 
        <label for="hot">Hotdog</label> <br>
        <input type="checkbox" id="t" name="foods[]" value="Taco"> 
        <label for="t">Taco</label><br>
        <input type="submit" name="submit">
    </form>
</body>
</html>

<?php

    // if(isset($_POST['submit'])){

    //     if(isset($_POST["pizza"])){
    //         echo "You like pizza <br>";
    //     }if(isset($_POST["hamburger"])){
    //         echo "You like hamburger <br>";
    //     }if(isset($_POST["hotdog"])){
    //         echo "You like hotdog <br>";
    //     }if(isset($_POST["taco"])){
    //         echo "You like taco <br>";
    //     }if(empty($_POST["pizza"])){
    //         echo "You don't like pizza <br>";
    //     }if(empty($_POST["hamburger"])){
    //         echo "You don't like hamburger <br>";
    //     }if(empty($_POST["hotdog"])){
    //         echo "You don't like hotdog <br>";
    //     }if(empty($_POST["taco"])){
    //         echo "You don't like taco";
    //     }
    // }
    if(isset($_POST["submit"])){
        $foods = $_POST["foods"];
        
        foreach($foods as $food){
            echo $food . "<br>";
        }
    }
    
?>