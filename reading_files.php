<?php 

$file = "example2.txt";

//using 'r' for read instead of 'w' for write
if($handle = fopen($file, 'r')) {


//fwrite read to the handle/file that is open
echo $content = fread($handle, 50); // second parameter = the bytes!
//each byte is a character
//filesize($file) <- function that reads the entire file size - instead of just one file

    fclose($handle);
} else {
    echo "The application could not write on the file";
}


?>