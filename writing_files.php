<?php 

$file = "example2.txt";

if($handle = fopen($file, 'w')) {


    //fwrite writes to the handle/file that is open
    fwrite($handle, 'Things were written in the PHP file!');


    fclose($handle);
} else {
    echo "The application could not write on the file";
}


?>