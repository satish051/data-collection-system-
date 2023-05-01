<html>
    <head>

        <title>sign up</title>

        <style>
            label{
                dispaly:flex;
                justify-content: center;

            }

            input{
                margin: 9px 0 0 28px;
                height: 20px;

            }

            .error
            {
                background-color: red;
                color: white;

            }

        </style>

        <!---linking external js file--->
        <script src="script.js" >
            </script>

    </head>

    <body>

            <h1> Welcome to the signup form of the seminar </h1>

    <form action="register_process.php" method="POST" onsubmit="abc()">

        <div>
        <label>Fullname </label>
            <input type="text" name="fullname" id="fullname"/>
             <span id="fullnameerror" class="error" ></span>
        </div>

        <div>
         <label> Username</label>
            <input type="text" name="username" id="username"/>
            <span id="usernameerror" class="error"></span>
        </div>

        <div>
            <label>  E-Mail</label>
            <input type="text" name="email" id="email"/>
        <span id="emailerror" class="error"></span>
        </div>
        
        <div>
        <label> Password </label>
            <input type="password" name="password" id="password"/>
            <span id="passworderror" class="error"></span>  
        </div>

        <div>
         <button type="submit" name=" " value="login" onclick="abc()">signup </button>
        </div>

        <span id="error"></span>

    </form>



    </body>



</html>