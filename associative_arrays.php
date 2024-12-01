<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label for="">Enter a country</label>
        <input type="text" name="country">
        <input type="submit" value="Submit">
    </form>
</body>
</html>

<?php
    // associative array = An array made of key=>value pairs

    // countires => capitals
    // id => username
    // item => price

    $capitals = array("USA"=>"Washington D.C",
                      "Japan"=>"Kyoto",
                      "South Korea"=>"Seoul", 
                      "India"=>"New Delhi");

    $capital = $capitals[$_POST["country"]];

    
    echo "The Capital is {$capital}";


















    //$capitals["USA"] = "Las Vegas";
    //$capitals["China"] = "Beijing";
    //array_pop($capitals);
    //array_shift($capitals);
    //$keys = array_keys($capitals);
    // $values = array_values($capitals);
    //$capitals = array_flip($capitals);
    //$capitals = array_reverse($capitals);
    // echo count($capitals);

    
    // foreach($capitals as $key => $value){
    //     echo "{$key} = {$value} <br>";
    // }

    // foreach($values as $value){
    //     echo $value . "<br>";
    // }


?>