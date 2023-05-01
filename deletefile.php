<?php
    $filename = $_GET['filename'];

    if(file_exists("images/".$filename))
    {
     unlink("images/".$filename);
     header("loction:gallery.php");
    }
    else
    {
     echo ("files not found");
    }

    ?>