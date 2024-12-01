<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="get">
        <label for="">Quantity</label><br>
        <input type="text" name="quantity">
        <input type="submit" value="Total">
    </form>
</body>
</html>

<?php
   $item = "Pizza";
   $price = 4.99;
   $quantity  = $_GET["quantity"];
   $total = $quantity * $price;

   echo "Your have order {$quantity} x {$item}/s <br>";
   echo "Your total is \${$total}" 

?>