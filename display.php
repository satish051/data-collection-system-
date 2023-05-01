<?php

include "database.php";

$sql = "SELECT id, fullname, email FROM hero";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) > 0) {
?>

<table border="1">

    <tr style= "color:white; background-color:black">
        <th>ID</th>
        <th>FULLNAME</th>
        <th>EMAIL</th>
    </tr>

<?php {
        while ($rows = mysqli_fetch_assoc($result)) {

?>

    <tr>
        <td><?php echo $rows["id"]; ?></td>
        <td><?php echo $rows["fullname"]; ?></td>
        <td><?php echo $rows["email"]; ?></td>
        <td><a href="edit_user.php?id=<?php echo $rows['id']; ?>">EDITUSER</a></td>
        <td><a href="delete.php?id=<?php echo $rows['id']; ?>">Delete</a>
        </td>
    </tr>

    <?php
        }
    ?>
</table>

<?php
    }
}
else
{
    echo "data not found!";
}

mysqli_close($con);
?>
