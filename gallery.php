<?php

include "header.php";

?>

<div id="file_uploder">

        <form action="fileuploder.php" method="POST"    enctype="multipart/form-data" >

            <input type="file" id="fileuploder" name="fileuploder"/>

            <br>
                <input type="submit" value="upload"/>
            <br>
        </form> 
</div>

<?php

    $dir = opendir("images");
    while(($file = readdir($dir)) !== false){
    {
        if($file == '.' || $file == '. .')
        {
            continue;
        }
    }
?>

<img src="images/<?php echo $file ?>" height="200px" width="200px" />
<a href="deletefile.php?filename=<?php echo $file?>">delete</a>

<?php
}
?>



