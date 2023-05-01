<html>
    <head>


        <title>
            Javascript Demo
        </title>


        <script>

            function changebackground()
            {
                document.getElementById("box").style.backgroundColor="green";
            }

            function reversebackground()
            {
                document.getElementById("box").style.backgroundColor="red";
            }

            function toggle()
            {var x = document.getElementById("box");
                if(x.style.display === "block"){
                    x.style.display = "none";
                }
                else{
                    x.style.display ="block";
                }

            }

        </script>
        

        <style>

            #box
            {
                height: 400px;
                width: 400px;
                background-color: red;
            }

        </style>


    </head>


    <body>

        <input type="button" id="hide" value="hide/show" onclick="toggle()"/>
        <input type="button" id="chbackground" value="changebackground" onclick="changebackground()"/>
        <input type="button" id="reversebackground" value="reverse background" onclick="reversebackground()"/>
       

        <div id="box"></div>

    </body>


</html>