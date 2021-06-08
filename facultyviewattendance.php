<!DOCTYPE html>
<html lang="en" ,dir ="ltr">
    <head>
        <meta charset="UTF-8">
        <meta name = "viewport" content="width=device-width, initial-scale=1">
        <title>
            faculty view attendence
       </title>
       <link rel="stylesheet" href="facultyviewattendence.css">
       <style>
        table, th, td {
          border: 1px solid wheat;
          width: 25%;
          height:100%;
        }
        body{
           background-image: url("books2.png");
            background-repeat:repeat-y;
            background-size: cover;
           }
        </style>
    </head>
    <body>
        <header style="font-family:'Trebuchet MS',  Helvetica, sans-serif">
            <h1  align="center" style="color: whitesmoke;">Faculty classwise attendance</h1>
            <br/>
            <h1 align="center" style="color: whitesmoke;">WELCOME MR.....</h1>
        </header>
        <div class="box">
            
            
            <div id="childbox1">
                <img src="logo.png" alt="logo"  style="border-radius:50%;" height="400px" width="200%">
            </div>
            
            <div id="childbox2">
                <section id="name">
                    
                    <form action="/action_page.php">
                        <label for="Date"><h1 style="color:whitesmoke;">Date:</h1></label>
                        <h1><input type="date" id="Date" name="Date" size="100%"></h1>
                    </form>
                </section>
                <section id="table">
                    <table style="border-color:wheat;border: solid 2 px;">
                        <tr>
                            <td style="color: wheat; font-size:35 cm;"><strong>Sno</strong></td>
                            <td style="color: wheat; font-size:35 cm;"><strong>Sec</strong></td>
                            <td style="color: wheat; font-size:35 cm;"><strong>Sub</strong></td>
                            <td style="color: wheat; font-size:35 cm;"><strong>Status</strong></td>
                        </tr>
                        <tr>
                            <td><br/></td>
                            <td><br/></td>
                            <td><br/></td>
                            <td><br/></td>
                            
                        </tr>
                    </table>
                </section>


                <div class="select">
                    <section id="logout">
                             <a type="button">Logout</a>
                    </section>
                    <section id="back">
                        <a type="button">Back</a>
                </section>
                    
                </div>		
              
            </div>
            
          </div>
          
        
            

    </body>
          
</html>
