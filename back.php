<html>
    <head>

        <style>
            .cell{
                height: 200px;
                width: 200px;
                background-color: orangered;
                margin-top: 10px;
                display: inline-block;
                text-align: center;
                font-size: 100px;
                color: pink;
                border-radius: 50px;
                margin-bottom: 20px;
                margin-right: 20px;
                
                

                

            }

            
.cell:hover{

    background-color: blue;    


}
a{
    text-decoration: none;

}


            </style>

    </head>

    <body>

<?php
   
for($i=1; $i<10; $i++) 
{
    if($i == 4|| $i ==7){
        echo"<br>";
    }

 {?>
 <button>
<div class="cell">
    <?php echo $i; ?>
</div>
 </button>
<?php
}}
?>
    </body>
 
    
</html>   