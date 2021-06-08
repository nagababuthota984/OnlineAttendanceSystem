


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Options</title>
    <link rel="icon" href="Images/title.png">
    
    <link rel="stylesheet" href="adminoptions.css">
       
    <style>
        body{
        background-image: url("Images/scene1.jpg");
         background-repeat:repeat-y;
         background-size: cover;
        }
    </style>
 </head>
 <body>
     <header style="font-family:Arial, Helvetica, sans-serif">
         <br/>

         <h1  align="center" style="color: white;">ADMIN</h1>
     </header>
     <div class="box">
         
         <div id="childbox1">
             <img src="Images/vvit.jpg" alt="logo" height="400px" width="100%" style="border-radius: 20PX;">

         </div>
         <div id="childbox2">
             <div class='user'>
             <?php 
                /* if else have been written so that if in case we are coming back from addstudent or addfaculty we are not posting anything
                 so in such cases we will just wish him welcome back!. */
                if(isset($_GET['name']))
                {
                    $username = "".$_GET['name']."";

                    echo "<h1 style='margin-left:10px;font-family:  Helvetica;color:darkslategray;'>Welcome $username!</h1> " ;
                }
                else
                {
                    echo "<h1 style='margin-left:10px;font-family:  Helvetica;color:darkslategray;'>Welcome back!</h1> " ;
                }
             ?>
             </div>
             <br>
             <section id="view">
                 <a onClick="fac()" type="button">Add Faculty</a>
                 
             </section>
             <br/>
             <br/>
             <section id="addstudent">
                 <a onClick="stu()" type="button">Add Student</a>
             </section>

             <section id="changepassword">
                 <a onClick="acp()" type="button">Change Password</a>
             </section>
             <br>
             <br/>
             
             <section id="logout">
                <a onClick="out()" type="button">Logout</a>

             </section>
             
         </div>
         
         
     
       </div>
       
     
       <script>
           function fac()
           {
               window.location.href="addfaculty.php";
           }
           function stu()
           {
               window.location.href="addstudent.php";
           }
           function acp()
           {
               window.location.href="adminchangepassword.php";
           }
           function out()
           {
               window.location.href="adminlogin.php";
           }
        </script>
    
</body>
</html>