<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Registration</title>
    <link rel="icon" href="Images/title.png">
    <link rel="stylesheet" href="loginpages.css">
    <style>
        body{
            background-image: url("Images/scene1.jpg");
            background-repeat: repeat-y;
            background-size: cover;

        }
        </style>
</head>
<body>
    <header style="font-family:'Trebuchet MS',  Helvetica, sans-serif">
        <h1  align="center" style="color:aliceblue">Admin Registration</h1>
    </header>
    <div class="box">
        
        <div id="childbox1">
            <img src="Images/vvit.jpg" alt="logo" height="400px" width="100%">
          
        </div>
        
        <div id="childbox2">
            <section id="name">
                <form method ="POST" action="adminregdb.php">
                    <label for="fname" style="color:azure;"><strong>USERNAME:</strong></label><br>
                    <input type="text" id="fname" name="fname" value=""><br>
                    <br/>
                    <label for="sname" style="color:azure;"><strong>PASSWORD:</strong></label><br>
                    <input type="text" id="sname" name="sname" value=""><br>
                    
                    <br/>
                    <label for="lname" style="color:azure;"><strong>RE-TYPE PASSWORD:</strong></label><br>
                    <input type="text" id="lname" name="lname" value="">

                    <div class="select">
                        <section id="logout">
                                 <input type="submit"></input>
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
<script>
    document.getElementById("logout").onclick=function(){
        //window.alert("You have been succesfully registered! Go back and login.");
    };
    document.getElementById("back").onclick= function(){
        location.href="adminlogin.php";
    };
</script>
</html>