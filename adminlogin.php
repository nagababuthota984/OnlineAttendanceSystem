<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="icon" href="title.png">
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
        <h1  align="center" style="color:azure;">ADMIN LOGIN</h1>
    </header>
    <div class="box">
        
        <div id="childbox1">
            <img src="Images/vvit.jpg" alt="logo" height="400px" width="100%">
          
        </div>
        
        <div id="childbox2">
            <section id="name">
                <form action="adminloginverify.php" method="POST">
                <?php
                        if(isset($_SESSION["error"])){
                        $error = $_SESSION["error"];
                        echo "<span ><h1 style='color:red;'>$error</h1></span>";
                    }
                ?>
                <br/>
                    <label for="fname" style="color:whitesmoke;"><strong>USERNAME:</strong></label><br>
                    <input type="text" id="fname" name="username" value=""><br>
                    <br/>
                    <br/>
                    <br/>
                    <label for="lname" style="color:whitesmoke;"><strong>PASSWORD:</strong></label><br>
                    <input type="password" id="lname" name="password" value="">

                    <!-- 3 buttons have been brought up into the form tag -->
                    <div class="select">
                        <input type="submit" style="width:140px;" id="logout" value="submit">
                        <input type="submit" style="width:140px;" id="logout" value="register">
                
                   
                  
                        <section id="back">
                            <a type="button">Back</a>
                        </section>
                    </div>
                </form>
            </section>
        </div>
    </div>
</body>
<script>
   
    document.getElementById("back").onclick=function(){
        location.href="index.php";
    };
</script>
</html>
<?php
    unset($_SESSION["error"]);
?>
