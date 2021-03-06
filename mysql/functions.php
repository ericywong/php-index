<?php include "db.php"; ?>

<?php 

function createRows() {
    //receiving the post here
    if(isset($_POST['submit'])) {
    global $connection;
        $username = $_POST['username'];
        $password = $_POST['password'];

        //Allows for special characters to be strings/protects unwarranted queries?
        $username = mysqli_real_escape_string($connection, $username);
        $password = mysqli_real_escape_string($connection, $password);

        //adding Blowfish encryption to passwords entered
        //$10$ it will tell the crypt function to run the hash 10times 
        $hashFormat = "$2y$10$";
        //salt to be added at the end of the hash
        $salt = "iusesomecrazystrings22";
        //putting the hash and salt together
        $hashF_and_salt = $hashFormat . $salt;

        //encryption with function crypt
        //pass in the password first, and then the salt
        $password =  crypt($password,$hashF_and_salt);
        

        //saving the sql query into a variable
        $query = "INSERT INTO users(username,password) ";
        $query .=  "VALUES ('$username', '$password')";

        //using mysqli_query, newer than mysql_query
        $result = mysqli_query($connection, $query);

        if (!$result) {
            die('Query FAILED!' . mysqli_error());
        } else {
            echo "Record created";
        }
    }
}

function readRows() {
    global $connection;
    //query is different from the get, in read, we're reading the data from the database
    $query = "SELECT * FROM users";
    $result = mysqli_query($connection, $query);
    if (!$result) {
        die('Query FAILED!' . mysqli_error());
    }   
    //While the results are true grab the information in the array
    // while($row = mysqli_fetch_row($result)) {
    //     print_r($row);
    // }
    //for more specificity
    while($row = mysqli_fetch_assoc($result)) {
        print_r($row);
    }    
}

function showAllData() {
    global $connection;
    $query = "SELECT * FROM users";
    $result = mysqli_query($connection, $query);
    if (!$result) {
        die('Query FAILED!' . mysqli_error());
    }

    while($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        echo "<option value='$id'>$id</option>";
        } 

}


function updateTable() {
    if(isset($_POST['submit'])) {
        global $connection;

        $username = $_POST['username'];
        $password = $_POST['password'];
        $id = $_POST['id'];

        //sql query to update values in columns at x row
        $query = "UPDATE users SET "; 
        $query .= "username = '$username', ";
        $query .= "password = '$password' ";
        $query .= "WHERE id = $id ";

        $result = mysqli_query($connection, $query);
        if(!$result) {
            die("Query failed. " . mysqli_error($connection));
        } else {
            echo "Record updated";
        }
    }   
}

function deleteRows() {
    if(isset($_POST['submit'])) {
        global $connection; 
        $username = $_POST['username'];
        $password = $_POST['password'];
        $id = $_POST['id'];
        
        //sql query to update values in columns at x row
        $query = "DELETE FROM users "; 
        $query .= "WHERE id = $id ";
        
            $result = mysqli_query($connection, $query);
            if(!$result) {
                die("Query failed. " . mysqli_error($connection));
            } else {
                echo "Record Deleted";
            }
    }
}
?>