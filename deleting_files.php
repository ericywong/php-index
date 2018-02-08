<?php 


if(isset($_POST['delete'])) {

    //unlink = delete file
    unlink('delete_test.php');
    echo "Your file as been deleted!!";
} else {

    "Error. File has not been deleted.";
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="deleting_files.php" method="post">
    <input type="submit" name="delete" value="Delete!">
    </form>
</body>
</html>