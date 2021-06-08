<?php
    session_start();
    if(!empty($_POST['username']) && !empty($_POST['name']))
    {
        $_SESSION['username'] = $_POST['username'];

    }
?>


<!DOCTYPE html>
<html lang="en" ,dir ="ltr">
    <head>
        <meta charset="UTF-8">
        <meta name = "viewport" content="width=device-width, initial-scale=1">
        <title>
            Student  Login Page
       </title>
       <link rel="stylesheet" href="loginpages.css">
       <style>
        body{
            background-image: url("Images/sample3.jpg");
            background-repeat: repeat-y;
            background-size: cover;

        }
        </style>
    </head>
    <body>
        <header style="font-family:'Trebuchet MS', Helvetica, sans-serif">
            <h1  align="center" style="color:azure;">STUDENT LOGIN</h1>
        </header>
        <div class="box">
            
            <div id="childbox1">
                <img src="Images\vvit.jpg" alt="logo" height="400px" width="100%">
              
            </div>
            
            <div id="childbox2">
                <section id="name">
                    <form action="studentloginverify.php" method="POST">
                        <label for="fname" style="color:whitesmoke;"><strong>USERNAME:</strong></label><br>
                        <input type="text" id="fname" name="username" value=""><br>
                        <br/>
                        <br/>
                        <br/>
                        <label for="lname" style="color:whitesmoke;"><strong>PASSWORD:</strong></label><br>
                        <input type="text" id="lname" name="password" value="">
                        <?php
                            if(isset($_SESSION['error']))
                            {
                                $message = "".$_SESSION['error']."";
                                echo "<h4 style='color:red;'>$message</h4>";
                            }
                        ?>
                        </br>
                        </br>


                        <div class="select">
                            <section >
                                <input type="submit" style="height:50px;width:140px;" id="logout"></input>
                            </section>
                            <section id="back">
                                <a type="button">Back</a>
                            </section>
                        </div>		
                      </form>
                      
                </section>
                
              
            </div>
            
          </div>
          
        
            

    </body>
    <!-- login button have to be activated -->

    <script type="text/javascript">
        document.getElementById("back").onclick = function(){
            location.href = "user.php";
        };
    
    </script>
          
</html>
<?php
    unset($_SESSION['error']);
?>