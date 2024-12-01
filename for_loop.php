<?php
    //for loop = repeat some code a certain # of times

    // for($i = 10;$i >= 0 ;$i-=2){
    //     echo $i . "<br>";
    // }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label for="">Enter a number count to </label>
        <input type="text" name="counter">
        <input type="submit" vlue="start">
    </form>
</body>
</html>

<?php
    $count = $_POST["counter"];
    for($i = $count; $i >= 0; $i--){
        echo $i . "<br>";
    }
?>  