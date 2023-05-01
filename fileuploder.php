<?php

$name = $_FILES['fileuploder']['name'];
$temp = $_FILES['fileuploder']['tmp_name'];

$dir = "images/";

move_uploaded_file($temp, $dir.$name);

header("Location:gallery.php");

