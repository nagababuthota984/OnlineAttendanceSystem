<?php
    session_start();

?>



<!DOCTYPE html>
<html lang="en" ,dir ="ltr">
    <head>
        <meta charset="UTF-8">
        <meta name = "viewport" content="width=device-width, initial-scale=1">
        <title>
            teacher  options page
       </title>
       <link rel="stylesheet" href="optinspage.css">
       
       <style>
           body{
           background-image: url("bgpic2.png");
            background-repeat:repeat-y;
            background-size: cover;
           }
       </style>
    </head>
    <body>
        <header style="font-family:Arial, Helvetica, sans-serif">
            <br/>

            <h1  align="center" style="color: wheat;">FACULTY</h1>
        </header>
        <div class="box">
            
            <div id="childbox1">
                <img src="Images\vvit.jpg" alt="logo" height="400px" width="100%" style="border-radius: 20PX;">

            </div>
            <div id="childbox2">
                <?php 
                /* if else have been written so that if in case we are coming back from addstudent or addfaculty we are not posting anything
                 so in such cases we will just wish him welcome back!. */
                if(isset($_GET['name']))
                {
                    $username = "".$_GET['name']."";

                    echo "<h1 style='margin-left:10px;font-family:  Helvetica;color:white;'>Welcome $username!</h1> " ;
                }
                else
                {
                    echo "<h1 style='margin-left:10px;font-family:  Helvetica;color:white;'>Welcome back!</h1> " ;
                }
             ?>
                <br>
                <section id="mark">
                <?php
                    if(isset($_GET['name']))
                    {
                        $username = "".$_GET['name']."";

                        echo "<a href='markattendance.php?name=$username' style='color:black' type='button'>MARK ATTENDANCE</a>";
                    }
                    else
                    {
                        echo "<a href='markattendance.php' type='button'>MARK ATTENDANCE</a>";
                    }
                ?>
                </section>
                <br>


                <section id="view">
                <?php
                    if(isset($_GET['name']))
                    {
                        $username = "".$_GET['name']."";

                        echo "<a href='facultyviewattendance.php?name=$username' style='color:black' type='button'>VIEW ATTENDANCE</a>";
                    }
                    else
                    {
                        echo "<a href='facultyviewattendance.php' type='button'>VIEW ATTENDANCE</a>";
                    }
                ?>

                </section>

                <br/>
                <section id="changepassword">
                <?php
                    if(isset($_GET['name']))
                    {
                        $username = "".$_GET['name']."";

                        echo "<a href='changefacultypassword.php?name=$username' style='color:black' type='button'>CHANGE PASSWORD</a>";
                    }
                    else
                    {
                        echo "<a href='changefacultypassword.php' type='button'>CHANGE PASSWORD</a>";
                    }
                ?>
                </section>
                <br>
                
                
                
                <section id="logout">
                   <a type="button" onClick="back()">LOGOUT</a>

                </section>
                
            </div>
            
            
        
          </div>
        
            

    </body>
    <script type="text/javascript">
        function back()
        {
            window.location.href = "faculty.php";
        }
        
    </script>    
          
</html>
<?php
     unset($_SESSION['error']);
?>