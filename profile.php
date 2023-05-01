<?php

session_start();
$Username = $_SESSION['Username'];
echo"welcome  " . $Username;
echo"<br>";
echo"profile page";


?>