
<?php
        session_start();
?>



<!DOCTYPE html>
<html lang="en" ,dir ="ltr">
    <head>
        <meta charset="UTF-8">
        <meta name = "viewport" content="width=device-width, initial-scale=1">
        <title>
            add faculty
       </title>
       <link rel="stylesheet" href="addstudent.css">
       <style>
        body{
        background-image: url("bgpic5.PNG");
         background-repeat:repeat-y;
         background-size: cover;
        }
    </style>
    </head>
    <body>
        <header style="font-family:'Trebuchet MS',  Helvetica, sans-serif">
            <h1  align="center" style="color: wheat;">ADD FACULTY</h1>
        </header>
        <div class="box">
            
            <div id="childbox1">
                <img src="Images/vvit.jpg" alt="logo" height="400px" width="100%" style="border-radius:8%;">
              
            </div>
            
            <div id="childbox2">
                <section id="name">
                    <form action="facultyreg.php" method="POST">
                    
                        <label for="fname"style="color: wheat;" ><strong>NAME OF THE FACULTY:</strong></label><br>
                        <input type="text" id="fname" name="name" value=""><br>
                        <br/>
                        
                        <label for="sname"style="color: wheat;"><strong>USERNAME:</strong></label><br>
                        <input type="text" id="sname" name="username" value=""><br>
                        <br/>
                        <label for="sname"style="color: wheat;" ><strong>PASSWORD:</strong></label><br>
                        <input type="password" id="sname" name="password" value=""><br>
                        
                        <br/>
                        <label for="lname"style="color: wheat;"><strong>CONFIRM PASSWORD:</strong></label><br>
                        <input type="password" id="lname" name="confirmpwd" value="">
                        <!-- moved -->
                        <?php
                        if(isset($_SESSION["error"])){
                        $error = $_SESSION["error"];
                        echo "<h4 style='color:red;'>$error.</h4>";
                        }
                        if(isset($_SESSION["success"]))
                        {
                            $message="".$_SESSION['success']."";
                            echo "<script type='text/javascript'> window.alert($message);</script>";
                        }
                        
                    ?>
                        <div class="select">
                            <section>
                                     <input id="logout" type="submit"></input>
                            </section>
                            <section id="back">
                                    <a onClick="back()" type="button">Back</a>
                            </section>
                        </div>
                      </form>
                      
                </section>
                		
              
            </div>
            
          </div>
          
        <script>
            function back()
            {
                window.location.href="adminoptions.php";
            }
        </script>
            

    </body>
          
</html>
<?php
    unset($_SESSION["error"]);
?>
