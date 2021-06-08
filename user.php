<!DOCTYPE html>
<html>
    <head>
	
        <meta charset = "utf-8">
		<link rel="stylesheet"  href="user.css">
        <title>
            Choose your role
        </title>
        <link rel="icon" href="title.png">
        <style>
            body{
                background-image: url("sample3.jpg");
                background-repeat: repeat-y;
                background-size: cover;
                

            }
            #back{
                width:5%;
                background-color:white;
                color:black;
                border:2px solid green;
                height:20%;
                padding:10px;
                text-align:center;
                font-family:Helvetica;
                font-size:150%;
                margin-left:47%;
                border-radius:10px;
            }
            #back:hover{
                background-color:green;
                color:white;
                padding:10px;
            }

	
	

        </style>        
    </head>
    <body>
        <div class = "heading">
			
            <h1>
                VVIT Online Attendance System
            </h1>
			
        </div>
        <div id="role">
		
		 <h1>Choose your role</h1>
		</div>
		
		<div class="select">
			<section id="button1">
			         <a type="button">Faculty</a>
			</section>
			<section id="button2">
					<a type="button">Student</a>
            </section>
        </div>
        </br>
        <br>
        <br>
        <div class="forback">
            <section id="back">
                <a type="button">Back</a>
                </section>
        </div>
            
        	
		
    </body>
    <script type="text/javascript">
        document.getElementById("button1").onclick = function () {
            location.href = "faculty.php";
        };
        document.getElementById("button2").onclick = function() {
            location.href = "student.php";
        };
        document.getElementById("back").onclick = function () {
            location.href = "index.php";
        };
    </script>
</html>

