<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php 
// arrays and calling arrays
$number = array(123, 423, 1231);
echo $number[2] . "<br>";
echo "<br>";
print_r($number);
echo "<br>";
//associative arrays for times you have lots of values for each key
//assign the value Edwin with key first_name
//removes the need for 0, 1, 2 etc
$names = array("first_name" => "Eric", "last_name" => "Wong");
echo "<br>";
print_r($names);
echo "<br>" . "<br>";
//echoing first name
echo  $names["first_name"] . " " . $names["last_name"];



?>
    
</body>
</html>