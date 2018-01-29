<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php 

    function addNumbers($number1, $number2) {

        $sum = $number1 + $number2;

        //return takes the value out of the function instead of printing it
        return $sum; 
    }

//save value into result
    $result = addNumbers(12,24);

    echo $result . "<br>";

    //add a number to the result variable and passing it into the same variable name, result

    $result = addNumbers(100, $result);

    echo $result . "<br>";

    //you can repeat/reuse $result over and over again

    $result = addNumbers(300, $result);

    echo $result . "<br>";


?>

</body>
</html>