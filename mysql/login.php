<?php 
//receiving the post here
if(isset($_POST['submit'])) {

    // echo "post submitted"; check to see if the post was submitted

    $username = $_POST['username'];
    $password = $_POST['password'];

    //connecting form post to sql database
    //first params is the server, second is the default username, third is default password
    //fourth is the database;
    $connection = mysqli_connect('localhost', 'root', '', 'loginapp');

        if ($connection) {
            
            echo "We are connected!";

        } else {

            die("Database connection failed");
            
        }

    // to make sure username and password inputs are coming through
    // echo $username;
    // echo $password;

    // to make sure both the username and password have been inputted
    // if($username && $password) {
    //     echo $username;
    //     echo $password;
    // } else {
    //     echo "Username and password field cannot be blank";
    // }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">

</head>
<body>
<div class="container">

    <div class="col-sm-6">
        <form action="login.php" method="post">
            <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" class="form-control">
            </div>

            <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control">
            </div>

            <input class="btn btn-primary" type="submit" name="submit" value="Submit">
        </form>
    </div>
</div>

</body>
</html>