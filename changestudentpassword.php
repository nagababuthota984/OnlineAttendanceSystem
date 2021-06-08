<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en" ,dir ="ltr">
    <head>
        <meta charset="UTF-8">
        <meta name = "viewport" content="width=device-width, initial-scale=1">
        <title>
            Change student password
       </title>
       <link rel="stylesheet" href="loginpages.css">
       <style>
        body{
             background-image: url("Images/sample6.jpg");
             background-repeat:repeat-y;
             background-size: cover;
        }
    </style>

    </head>
    <body>
        <header style="font-family:'Trebuchet MS',  Helvetica, sans-serif">
            <h1  align="center">CHANGE STUDENT PASSWORD</h1>
        </header>
        <div class="box">
            
            <div id="childbox1">
                <img src="Images/vvit.jpg" alt="logo" height="400px" width="100%">
              
            </div>
            
            <div id="childbox2">
                <section id="name">
                    <form action="changestudentpassworddb.php" method="POST">
                        <label for="fname" style="color:azure;"><strong>USERNAME:</strong></label><br>
                        <input type="text" id="fname" name="username" value=""><br>
                        <br/>
                        <label for="sname" style="color:azure;"><strong>CURRENT PASSWORD:</strong></label><br>
                        <input type="password" id="sname" name="oldpassword" value=""><br>
                        
                        <br/>
                        <label for="lname" style="color:azure;"><strong>NEW PASSWORD:</strong></label><br>
                        <input type="password" id="lname" name="newpassword" value="">
                        <?php
                        if(isset($_SESSION["error"])){
                        $error = $_SESSION["error"];
                        echo "<span ><h3 style='color:red;'>$error</h3></span>";

                    }
                    ?>                    
                        <div class="select">
                            <section >
                                <input id ="logout" type="submit" style="width:140px;height:50px;">
                            </section>
                            <section id="back">
                                <a type="button" onclick = "back()">Back</a>
                            </section>
                        </div>		





                      </form>
                      
                </section>
                
              
            </div>
            
          </div>
          
        
            

    </body>
    <script type="text/javascript">
    function back()
    {
        window.location.href="studentoptions.php";
    }
    </script>
          
</html>
<?php
    unset($_SESSION['error']);
?>