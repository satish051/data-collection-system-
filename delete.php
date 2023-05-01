<?php
require "database.php";

$id = $_GET['id'];


$sql = "delete from hero where id=$id";

$res = mysqli_query($con, $sql);

if ($res) {
    header("Location:display.php");
}
echo "Error deleting record";
mysqli_close($con);

?>

