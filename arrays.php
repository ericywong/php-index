<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php 

 $numberList = array(2342, 4234, "string!", '<h1>Hello h1!</h1>');  

 // echo $numberList; raises error

//use index number to display values
echo $numberList[0] . " " . $numberList[2];
echo $numberList[3];

//prints out array structure
print_r($numberList);
?>    

</body>
</html>