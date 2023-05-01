<?php

function database()
{

    $server = "localhost";
    $user = "root";
    $dbpassword = "";
    $database = "satish";

//open database connect

    $con = mysqli_connect($server, $user, $dbpassword, $database);
    return $con;
}


function getfilecontain()
{
    
    $file = "data.txt";
    $handle = fopen($file, "r");
    $contain = fread($handle, filesize($file));
    return $contain;

}

function readlinebyline($file)
{
    $lines = file($file);
    foreach($lines as $lines)
    {
        echo $lines . "<br/>";

    }
}

function readfgets($filename)
{
    $file =fopen($filename,"r");
    while(! feof($file))
    {
        echo fgets($file);
        echo "<br>";

    }
    fclose($file);

}
function writefile()
{
    $file = "data.txt";
    $handle =fopen($file, "a");
    fwrite($handle, "samsung");
    fclose($handle);

}

function appendfile($file, $contain)
{
    $handle = fopen($file,"a");
    fwrite($handle, $contain);
    fclose($handle);

}



getfilecontain();

?>