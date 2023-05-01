<?php

include "database.php";

$id = $_POST['id'];
$username = $_POST['username'];
$email = $_POST['email'];
$fullname = $_POST['fullname'];

$sql = "update hero set fullname='$fullname', email='$email',username='$username' where id=$id";
$result = mysqli_query($con, $sql);

if ($result)
{
    header("location:display.php");

}
else
{
    echo "unable to update";
}


?>