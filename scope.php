<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php

$x = "outside"; //global scope

function convert() {
global $x; //declaring that $x is global

    $x = "inside"; //local scope
}

echo $x; //global scope

echo "<br>";

convert(); //changes the value

echo $x; //still global scope (until you declare global inside the function)

echo "<br>";

echo $x //value is still from local scope
?>

</body>
</html>