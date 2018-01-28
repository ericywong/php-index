<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php

//switch statements used to test one variable to many conditions
$number = 214;

switch($number){

    case 34:
    echo "it is 34";
    break;
    case 37:
    echo "it is 37";
    break;
    case 35:
    echo "it is 35";
    break;
    case 24:
    echo "it is 24";
    break;

    //in case none of the cases were true when put against the variable
    default:
    echo "we could not find the number";
    break;
}

?>

</body>
</html>