<?php
    //function = write some code once, reuse when you need it
    //           type () after function name to invoke
    //           ex. add() subtract() multiply() divide()

    function happy_birthday($firstname,$age){
        echo "Happy Birthday {$firstname} you! <br>";
        echo "Happy Birthday to you! <br>";
        echo "Happy Birthday {$firstname} you! <br>";
        echo "Happy Birthday to you! <br>";
        echo "You are {$age} years old.  <br>";
    }

    // happy_birthday("Spongebob",12);
    // happy_birthday("Patrick", 35);
    // happy_birthday("Squidward",45);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <form action="index.php" method="POST">
        <label for="">Enter Any Number and we will guess whether it is even or odd :</label>
        <input type="number" name="number">
        <input type="submit" value="Click">
    </form> -->
    
    <form action="index.php" method="POST">
        <h1>Caculation of Hypotenuse</h1>
        <label for="">A :</label>
        <input type="number" name="a">
        <label for="">B :</label>
        <input type="number" name="b">
        <input type="submit" value="Calculate">
    </form>
</body>
</html>


<?php
    //$numb = $_POST['number'];
    //is_even($numb);
    $a = $_POST['a'];
    $b = $_POST['b'];
    echo hypotenuse($a, $b);

    function is_even($number){
        $result = $number % 2;
        
        if($result == 0 ){
            echo "Your number is even. <br>";
        }else{
            echo "You number is odd. <br>";
        }
        return "You have enter {$number} <br>";
    }

    function hypotenuse(int $a,int $b){
        $c = sqrt($a ** 2 + $b **2);
        return $c;
    }
    
?>