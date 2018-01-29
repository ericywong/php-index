<!-- doesn't take html!-->
<?php 
if(isset($_POST['submit'])) {

    $name = array("eric", "peter", "mohad", "maria", "jane");

    $username = $_POST['username'];
    $password = $_POST['password'];    

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