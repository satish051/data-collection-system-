<html>
    <head>
        <title> Form </title>

    </head>

    <body>

    <style>
        
        </style>

        <h1>CSIT seminar </h1>

    <form action="process.php" method="POST" >
    
        <p>
            <label>Username </label>
            <input type="text" name="Username">
        </p>

        <p>
            <label>Password</label>
            <input type="password" name="Password">
        </p>

        <p>
            <input type="submit" name="Submit">
            <input type="reset" name="Reset">
        </p>



        
    </form>

    <span style="colour:red;">
    <?php
    if(isset($_GET['error']))
    {
        echo $_GET['error'];
    }
    ?>
    </span>

        



    </body>


</html>
