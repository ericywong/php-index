<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php 
//constants are like variables, a container to put information
//difference is that it does not change and that we define it with a function

    $number = 10; //variable
    $number = "this variable has been changed from 10 to a string";
    echo $number . "<br>"; //printing the value out

    //takes a php defined function, define
    define("NAME", "This is a constant called NAME");//once you set a constant, you can't change it no matter what you do
    // NAME = "another constant"; <- does not work!!!
    echo NAME;

?>

</body>
</html>