<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>While Loops</title>
</head>
<body>

<?php 

//change if statements to while for while loops
//add counter to avoid infinite loop
$counter = 0;

while($counter < 10) {

    echo "This is counter number: " . $counter . "<br>";
    $counter++;
    // $counter = $counter + 1; 
}

?>


</body>
</html>