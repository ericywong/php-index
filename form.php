<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>


<!-- POST IS A SUPER GLOBAL VARIABLE, WILL PICK UP DATA FROM DATA -->
<!-- saving all the variables in post -->
<?php 
//using super global variable to collect the data
//everything gets turned into an associative array, key=value pair
//$_POST is the associative array, checks if the submit value is set and sends all the data
if(isset($_POST['submit'])) {

    $name = array("eric", "peter", "mohad", "maria", "jane");

    // echo "yes, the submit button was pressed!";
    //below after the form is submitted, we're going to grab the username and password data
    $username = $_POST['username'];
    $password = $_POST['password'];    

    // echo "Hello " . $username;
    // echo "Your password is " . $password; 
    //usually login and password is stored in a database

    $minimum = 3;
    $maximum = 10;
    if(strlen($username) < $minimum) {

        echo "Username must be longer than 3 characters";
    }

    if(strlen($username) > $maximum) {

        echo "Username cannot be longer than 10 characters";
    }

    
    $username_lower = strtolower($username);

    if(!in_array($username_lower, $name)) {

        echo "Sorry, you are not allowed access to this content.";

    } else {

        echo "Welcome!";
    }
}


?>

<!-- creating a form below -->
<!-- data in form is usually sent to another php folder, function.php or something -->
<!-- form methods are sent via post from form.php -->
<form action="form.php" method="post">

    <!-- placeholders so users know what to input in to the forms -->
    <input type="text" name="username" placeholder="Enter Username">
    <br>
    <input type="password" name="password" placeholder="Enter Password">
    <br>
    <!-- you need name to send data to post -->
    <!-- form is sent onClick -->
    <input type="submit" name="submit">

</form>

</body>
</html>