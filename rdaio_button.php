<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="POST">
        <input type="radio" id="cc1" name="credit_card" value="Visa">
        <label for="cc1" >Visa</label><br>
        <input type="radio" id="cc2" name="credit_card" value="Mastercard">
        <label for="cc2" >Mastercard</label><br>
        <input type="radio" id="cc3" name="credit_card" value="American Express">
        <label for="cc3" >American Express</label><br>
        <input type="submit" name="confirm" value="Confirm">
    </form>
</body>
</html>

<?php
if(isset($_POST['confirm'])){
    if(isset($_POST['credit_card'])){
        $credit_card = $_POST['credit_card'];
        echo "You have selected {$credit_card}";
    }else{
        echo "Please make a selection";
    }
}

// try writing with (switch-case) && (if-elseif) 
// ****NOTE****
// use ISSET to check whether the submit button work and 
// when dealing with a radio button dont forget about the 
// name and to if(ISSET()) them in order to know which 
// is being click and received the data

?>