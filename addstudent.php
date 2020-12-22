<?php
   session_start();
?>

<!DOCTYPE html>
<html lang="en" ,dir ="ltr">
    <head>
        <meta charset="UTF-8">
        <meta name = "viewport" content="width=device-width, initial-scale=1">
        <title>
            add student
       </title>
       <link rel="stylesheet" href="addstudent.css">
       <style>
        body{
        background-image: url("bgpic5.png");
         background-repeat:repeat-y;
         background-size: cover;
        }
    </style>
    </head>
    <body>
        <header style="font-family:'Trebuchet MS',  Helvetica, sans-serif">
            <h1  align="center" style="color: wheat;">ADD STUDENT</h1>
        </header>
        <div class="box">
            
            <div id="childbox1">
                <img src="Images\vvit.jpg" alt="logo" height="400px" width="100%" style="border-radius:8%;">
              
            </div>
            
            <div id="childbox2">
                <section id="name">
                    <form action="studentreg.php" method="POST">
                      <div id="choose">
                        
                        
                            <select required name="branch" style="width:25%;border-radius:10px;margin-right:10px;">
                                <option value="">Branch</option>
                                <option value="CSE">CSE</option>
                                <option value="IT">IT</option>
                                <option value="ECE">ECE</option>
                                <option value="ME">ME</option>
                                <option value="EEE">EEE</option>
                                <option value="CE">CE</option>  
                            </select>
                        <br/>
                        
                       
                       
                        <select required name="section" style="width:25%;border-radius:10px;margin-left:10px;margin-right:10px;">
                            <option value="">Section</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                        </select><br>
                        <br/>

                        </div>
                        </br>
                        <label type="text" style="color:wheat;"><strong>NAME:</strong></label><br>
                        <input type="text" id="fname" name="name" value=""><br>
                        </br>
                        <label for="sname"style="color: wheat;" ><strong>USERNAME:</strong></label><br>
                        <input type="text" id="sname" name="username"  value=""><br>
                        
                        <br/>
                        <label for="lname"style="color: wheat;"><strong>PASSWORD:</strong></label><br>
                        <input type="text" id="lname" name="password" value="">
                        <?php
                           if(isset($_SESSION['error']))
                           {
                               $error = "".$_SESSION['error']."";
                               echo "<h4 style='color:red;'>$error</h4>";
                           }
                        ?>
                        <div class="select">
                            <section>
                                    <input id="logout" type="submit"></input>
                            </section>
                            <section id="back">
                                    <a type="button" onClick="back()">Back</a>
                            </section>
                        </div>		
                    </form>
                      
                </section>
                
              
            </div>
            
          </div>
          
        
            

    </body>
    <script>
        function back()
        {
            window.location.href="adminoptions.php";
        }
    </script>
</html>
<?php
    unset($_SESSION["error"]);
?>
