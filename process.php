<?php
require "session.php";
require "database.php";
require "header.php";

$Username = $_POST['Username'];
$Password =$_POST['Password'];


$sql = "SELECT count(*) FROM hero where username='$Username' and password  ='$Password'";

$result = mysqli_query($con, $sql);

$row = mysqli_fetch_array($result);
$count = $row['count(*)'];


if ($count > 0) {
    $_SESSION['Username'] = $Username;
    header("Location:welcome.php");
}

else
{
    header("Location:form.php?error=invalid credentials");
}
 ?>
