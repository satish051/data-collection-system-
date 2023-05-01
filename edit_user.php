
<?php

include "header.php";
require "database.php";

$id = $_GET['id'];


$sql = "SELECT id, fullname, email, username FROM hero where id=$id";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) 
{


    $record = mysqli_fetch_array($result);
    ?>
    <form action="updateuser.php" method="POST">
        <table>
            <tr>
             <td>   <input type="hidden" name="id" value="<?php echo $record['id']?>"></td>
            </tr>
            <tr>
            <td>
                    <input type="text" name="fullname" value="<?php echo $record['fullname']?>">
                </td>
                <td>
                    <input type="text" name="username" value="<?php echo $record['username']?>">
                </td>
                <td>
                    <input type="text" name="email" value="<?php echo $record['email']?>">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="updateuser"/>
                </td>
            </tr>
        </table>
    </form>
    <?php
}
else

{

    echo "unable to get the record";

}


?>
