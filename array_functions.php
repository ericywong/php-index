<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php 
//you can make your own array functions, but most of the ones need are already pre-defined
//saves a lot of time

$list = [343, 23423, 1231,435];


//echo the max value in the array
echo max($list);

echo "<br>";

//echo the min value in the array
echo min($list);

echo "<br>";

//sort the array before printing the array
sort($list);

//print_r is useful for the function and prints th entire array with keys and values
print_r($list);
?>

</body>
</html>