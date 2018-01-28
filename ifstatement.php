<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php

    if(3 < 10) {

        echo "three is less than 10." . "<br>";
    }
?>


<?php

    if(3 > 10 ) {

        echo "three is greater than 10." . "<br>";
    } else {

        echo "three is not greater than 10." . "<br>";
    }
?>

<?php

    if(3 > 10 ) {

        echo "three is greater than 10." . "<br>";

    } elseif (3 >2) {

        echo "three is not greater than 10, it is greater than 2." . "<br>";
         
    } else {

        echo "three is not greater than 10." . "<br>";
    }
?>

</body>
</html>