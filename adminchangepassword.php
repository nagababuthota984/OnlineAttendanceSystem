<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" ,dir ="ltr">
    <head>
        <meta charset="UTF-8">
        <meta name = "viewport" content="width=device-width, initial-scale=1">
        <title>
            Change Admin password
       </title>
       <link rel="icon" href="title.png">
       <link rel="stylesheet" href="loginpages.css">
       <style>
           body{
                background-image: url("scene1.jpg");
                background-repeat:repeat-y;
                background-size: cover;
           }
       </style>
    </head>
    <body>
        <header style="font-family:'Trebuchet MS',  Helvetica, sans-serif">
            <h1  align="center" > CHANGE ADMIN PASSWORD</h1>
        </header>
        <div class="box">
            
            <div id="childbox1">
                <img src="vvit.png" alt="logo" height="400px" width="100%" style="border-radius:7%;">
              
            </div>
            
            <div id="childbox2">
                <section id="name">
                    <form action="adminchangepassworddb.php" method="post">
                    <?php
                        if(isset($_SESSION["error"])){
                        $error = $_SESSION["error"];
                        echo "<span ><h3 style='color:red;'>$error</h3></span>";

                    }
                    ?>
                        <label for="fname" ><strong>OLD PASSWORD:</strong></label><br>
                        <input type="text" id="fname" name="oldpassword" value=""><br>
                        <br/>
                        <label for="sname" ><strong>NEW PASSWORD:</strong></label><br>
                        <input type="text" id="sname" name="newpassword" value=""><br>
                        
                        <br/>
                        <label for="lname" ><strong>CONFIRM NEW PASSWORD:</strong></label><br>
                        <input type="text" id="lname" name="confirmpwd" value="">

                        
                        <div class="select">
                        <input type="submit" style="width:140px;" id="logout" value="Change ">
                        <section id="back">
                            <a type="button">Back</a>
                        </section>
                        </div>    
              
                      </form>
                      
                </section>
                
            </div>
            
          </div>
          
        
            

    </body>
    <script type="text/javascript">
        
        document.getElementById("back").onclick=function()
        {
            location.href="adminoptions.php";
        };
        </script>
          
</html>
<?php
    unset($_SESSION["error"]);
?>