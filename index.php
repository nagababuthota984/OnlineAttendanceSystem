<!DOCTYPE.html>
<html>
    <head>
        <meta charset = "utf-8">
		<link rel="stylesheet"  href="index.css">
        <title>
            Online Attendance System
        </title>
        <link rel="icon" href="Images\title.png">
        <style>
            body{
            background-image: url("class.png");
             background-repeat:repeat-y;
             background-size: cover;
            }
        </style>
    </head>
    <body>
        <header class = "heading">
			
            <h1>
                VVIT Online Attendance System
            </h1>
			
        </header>
		
        <div id="role">
		<h1>Choose your role</h1>
		</div>
		
		<div class="select">
           
			<section id="button1">
                <img src= "adminicon2.PNG">
                     
			         <a type="button">Admin</a>
			</section>
			<section id="button2">
                <img src= "usericon2.PNG">
               
                
					<a type="button">User</a>
			</section>
		</div>		
			    
		
    </body>
    <script type="text/javascript">
        document.getElementById("button1").onclick = function () {
            location.href = "adminlogin.php";
        };
        document.getElementById("button2").onclick = function() {
            location.href = "user.php";
        };
    </script>
</html>
