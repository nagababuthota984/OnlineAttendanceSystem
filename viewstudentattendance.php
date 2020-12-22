<?php
    session_start();
?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="viewstudentattendace.css">
        <link rel="icon" href="Images\title.png">   
        <title>
            View your attendance
        </title>
        <style>
            body{
                background-image: url("Images/sample2.jpg");
                background-repeat: repeat-y;
                background-size: cover;
                

            }
        </style>
        
    </head>
    <body>
        <header style="font-family: Helvetica, sans-serif" >
            <h1  align="center" style="font-size: 300%;">Your Attendance</h1>
        </header>

            <section class="container">
                <div class="one">
                    
                    <label for="fname"><strong><?php if(isset($_SESSION['username'])){ $username="".$_SESSION['username']."";echo "<h2 style='color:whitesmoke;font-family : Helvetica, sans-serif ;'>$username</h2>";}?></strong></label>
                </div>
                <div class="two">
                    <div id="totalscore">
                    <?php
                                include_once 'include files/config.php';
                            
                                $st = "SELECT * FROM student WHERE username = '$username'";
                                $res = mysqli_query($conn,$st) or die(mysqli_error($conn));
                                if(mysqli_num_rows($res)!=0)
                                {
                                    $rows = mysqli_fetch_array($res,MYSQLI_ASSOC);
                                    $name =  $rows['name'];
                                    $name = strtolower($name);
                                    $tablename = str_replace(' ', '', $name); 
                                    
                                    $sql = "SELECT * FROM $tablename";
                                    $r = mysqli_query($conn,$sql) or die(mysqli_error($conn));
                                    $total = 7*mysqli_num_rows($r);
                                    $presentcount = 0;
                                    while($line = mysqli_fetch_array($r))
                                    {

                                        $i=1;
                                        
                                        while($i<=7)
                                        {
                                            $period = "period".$i."";
                                            $data = $line[$period];
                                            $string  = explode('_',$data);
                                            //print_r($string);
                                            if(!empty($string[1]))
                                            {
                                                 if($string[1] == 'present')
                                                 {
                                                     $presentcount+=1;
                                                 }
                                            }
                                            $i++;
                                        }
                                    }
                                    $percent = $presentcount/$total*100;
                                    
                                }
                    ?> 
                    <div class="totalatt">
                        <label for="total" style="font-family:Helvetica,sans-serif;"><strong>Overall attendance:</strong></label>
                        <div class="bar" style="margin-left:3px;margin-top:3px;">
                            <div  class="perc" style="width: <?php echo round($percent);?>%;"  ></div>
                            
                        </div>
                        <label for="pec" style="color:white;font-size:60%;font-family:Helvetica,sans-serif;text-align:center;margin-left:3px;margin-top:6px;">
                                    <?php echo round($percent)."%";?>
                        </label>
                            

                        </div>
                    </div>    
                    <div id="datewisescore">
                        </br>
                        </br>
                        <form action="viewstudentattendance.php" method="POST">
                            <label for="date" style="font-family : Helvetica, sans-serif ;"><strong>Pick a date:</strong></label>
                            <input type="date" id="selected" name="selday">
                            <input type="submit" value="Submit">
                        </form>
                            
                            <?php
                                include_once 'include files/config.php';
                                if(isset($_POST['selday']))
                                {
                                    $date = $_POST['selday'];
                                    $st = "SELECT * FROM student WHERE username = '$username'";
                                    $res = mysqli_query($conn,$st) or die(mysqli_error($conn));
                                    if(mysqli_num_rows($res)!=0)
                                    {
                                        $rows = mysqli_fetch_array($res,MYSQLI_ASSOC);
                                        $name =  $rows['name'];
                                        $name = strtolower($name);
                                        $tablename = str_replace(' ', '', $name);
                                        $sql = "SELECT * FROM $tablename WHERE date = '$date'";
                                        $result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
                                        if(mysqli_num_rows($result)!=0)
                                        {
                                            $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
                                            
                                            
                                            
                                            echo "<table border='1' style='background-color:darkslategray;color:white;font-size:90%;font-family : Helvetica, sans-serif ;'>";
                                            echo "<thead>";
                                            echo "<tr>";
                                            echo "<th>Period</th>";
                                            echo "<th>Subject</th>";
                                            echo "<th>Status</th>";
                                            echo "</tr>";
                                            echo "</thead>";
                                            echo "<tbody style='text-align:center;'>";
                                            
                                            $i=1;
                                            while($i<=7)
                                            {
                                                echo "<tr>";
                                                echo "<td>$i</td>";
                                                $period = "period".$i."";
                                                if(!empty($row[$period]))
                                                {
                                                    $details = explode("_",$row[$period]);
                                                    $subject = $details[0];
                                                    $status = $details[1];
                                                    echo "<td>$subject</td>";
                                                    echo "<td>$status</td>";
                                                }
                                                else
                                                {
                                                    echo "<td>--</td>";
                                                    echo "<td>--</td>";
                                                }
                                                echo "</tr>";

                                                $i++;
                                            }
                                            
                                        }
                                        else
                                        {
                                            echo "<h3 style='font-family:Helvetica,sans-serif;color:brown;'>Date you have picked is invalid.</h3>";
                                        }
                                    }
                                }
                            ?>
                    
                    </div>
                    
                </div>
                
            </section>
            </br>
            </br>
            </br>
            <!-- <div id="but">
                <section id="logout1">
                <a type="button">Logout</a>
                </section>
                <section id="logout2">
                    <a type="button">Back</a>
                </section>    
            </div> -->
    
    </body>

    <script type="text/javascript">
        document.getElementById("logout1").onclick = function(){
            location.href="C:/Users/iamnb/Documents/Online Attendance Project/index.html";
        };
    </script>
</html>
