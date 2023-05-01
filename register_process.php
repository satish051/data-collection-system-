<?php

require 'database.php';

$fullname = $_POST['fullname'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

//empty validaton
if (empty($fullname)|| empty($username)|| empty($email)||empty($password))
{
    header("Location:register.php?error=incomplete form");
}

//to store in database

$sql = "insert into hero(fullname, email, username, password) values('$fullname', '$email', '$username', '$password')";

mysqli_query($con, $sql);
echo "new record added :";


//closing database
mysqli_close($con)


?>

