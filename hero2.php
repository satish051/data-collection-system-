<html>
    <><head>
        <title>
            Arrays
        </title>
        <style>
            .link{
                background: red;
                color: white;
                padding: 3px;
                margin-top: 10px;
                text-decoration: dotted red;
                width: 140px;
                font-size: 40px;

            }

        a {
            text-decoration: none;

        }


        li:hover{
            background: pink;
        }



            </style>
    </head>


<body>


<?php

$a = ["home","about","contact","help"];

?>
<ul>



<?php
foreach($a as $v){
?>
    <a href="a">
    <li class="link"> <?php echo $v; ?></li></a>


    <?php
    
}
?>

</ul>
</body>
</html>