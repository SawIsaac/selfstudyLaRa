<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post" >
        <label for="">x :</label>
        <input type="text" name="x">
        <label for="">y :</label>
        <input type="text" name="y">
        <label for="">z :</label>
        <input type="text" name="z">
        <input type="submit" value="total">
    </form>

    <br><br><hr><br><br>

    <form action="index.php" method="POST">
        <label for="">Enter the radius for the circle : </label>
        <input type="text" name="radius">
        <input type="submit" value="Calculate">
    </form>

<!-- Calculate the area and volue of the Circle 
    A = Pir2
    V = 4/3Pir3 -->
</body>
</html>
<?php
    // $x = $_POST["x"];
    // $y = $_POST["y"];
    // $z = $_POST["z"];
    // $total = null;
    //$total = abs($x);     //aboslute
    //$total = round($x);
    //$total = $x + $y + $z;
    //$total = ceil($x);
    //$total = floor($x);
    //$total = pow($x , $y);
    //$total = sqrt($x);
    //$total = max($x,$y,$z);
    //$total = min($x, $y, $z);
    //$total = pi();
    //$total = rand(-100 , 100);


    // echo "The largest number is {$total}<br>";


    $radius = $_POST["radius"];
    $circumference = null;
    $area = null;
    $vol = null;

    $circumference = 2 * pi() * $radius;
    $circumference = round($circumference, 2);

    $area = pi() * pow($radius, 2);
    $area = round($area, 2);

    $vol = 4/3 * pi() * pow($radius, 3);
    $vol = round($vol, 2);

    echo "Circumference = {$circumference}cm  <br>";
    echo "Area = {$area}cm^2 <br>";
    echo "Volume = {$vol}cm^3 <br>";
?>

