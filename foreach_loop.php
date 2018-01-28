<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>For each loop</title>
</head>
<body>


<?php

//for each loop loops through the array - very powerful
$numbers = array(2342, 23423, 531, 4234, "I am a string!", 4353432, "<h1>BOLD!</h1>");
foreach($numbers as $number) {

    //each number in the array $numbers will be put in the place of $number
    echo $number . "<br>";

}

?>

</body>
</html>