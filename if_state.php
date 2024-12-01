<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <form action="index.php" method="POST">
        <label for="">Enter your age :</label>
        <input type="text" name="age">
        <input type="submit" value="Enter">
    </form> -->

    <form action="index.php" method="POST">
        <label for="">How many Hours do you work : </label>
        <input type="text" name="hours">
        <input type="submit" value="Enter">
    </form>
    
</body>
</html>

<?php
    // $age = $_POST["age"];

    // if($age >= 18 && $age <= 50){
    //     echo "You are allowed to enter";
    // }else if($age < 18){
    //     echo "You are too young";
    // }else{
    //     echo "You are too old";
    // }
    // $adult = false;

    // if($adult){
    //     echo "You can enter the site";
    // }else{
    //     echo "You cannot enter the site";
    // }

    $hours = $_POST["hours"];
    $rate =  15;
    $weekly_pay = null;

    $weekly_pay = $hours * $rate;
    if($hours <=0){
        $weekly_pay = 0;
        echo "You must work at least 40 hours. Your working hours isn't reach to 1";
    }
    else if($hours >= 40){
        echo "Your will receive about \${$weekly_pay}";
    }else{
        echo "Your must work at least 40 hours. Your working is just {$hours} Hours. <br> You made \${$weekly_pay} this week but you cannot cash out";
    }
?>