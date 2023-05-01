<?php
require_once "session.php";
$u = $_SESSION['Username'];
if (empty($u))
{
    header("Location:form.php");
}
?>

<div style="height:40px;width:100%;background:blue;color:white;">

<?php echo "Welcome " . $u; ?>


<a href="profile.php" style="color:white;margin-left:100px;">Profile</a>

<a href="display.php" style="color:white;margin-left:100px;">UPDATE USER</a>

<a href="logout.php" style="float:right; margin-right:100px; color:white;">LOGOUT</a>

</div>
        
 
