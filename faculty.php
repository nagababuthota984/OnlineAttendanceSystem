<?php
    session_start();
    if(empty($_POST['username'])){
        $_SESSION['username'] ="";
        
    } else {
        $_SESSION['username'] = $_POST['username'];
    }
?>    


<!DOCTYPE html>
<html lang="en" ,dir ="ltr">
    <head>
        <meta charset="UTF-8">
        <meta name = "viewport" content="width=device-width, initial-scale=1">
        <title>
            Faculty Login Page
       </title>
       <link rel="stylesheet" href="loginpages.css">
       <style>
           body{
            background-image: url("Images/sample4.jpg");
            background-repeat: repeat-y;
            background-size: cover;

        }
       </style>
    </head>
    <body>
        <header style="font-family:'Trebuchet MS',  Helvetica, sans-serif">
            <h1 style="color:white;" align="center">FACULTY LOGIN</h1>
        </header>
        <div class="box">
            
            <div id="childbox1">
                <img src="Images\vvit.jpg" alt="logo" height="400px" width="100%">
              
            </div>
            
            <div id="childbox2">
                <section id="name">
                    </br>
                    </br>
                    <form action="facultyloginverify.php" method="POST">
                        <label for="fname" style="color:azure;" ><strong>USERNAME:</strong></label><br>
                        <input type="text" id="fname" name="username" value=""><br>
                        <br/>
                        
                        <br/>
                        <label for="lname"style="color:azure;" ><strong>PASSWORD:</strong></label><br>
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
                            <section>
                                    <input id ="logout" type="submit" style="height:45px;width:140px;" ></input>
                            </section>
                            <section id="back">
                                    <a type="button" >Back</a>
                            </section>
                        </div>




                      </form>
                      
                </section>
                		
              
            </div>
            
          </div>
          
        
            

    </body>
    <script type="text/javascript">
        document.getElementById("back").onclick = function(){
            location.href = "index.php";
        };
        
    </script>
          
</html>
<?php
   unset($_SESSION["error"]);
?>
