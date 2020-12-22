<?php
    session_start();
    if(isset($_GET['success']))
    {
            echo '<script type="text/javascript"> document.getElementById("myForm").style.display = "block"; </script>';
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Mark Attendance</title>
        <link rel="icon" href="Images/title.png">
        <link rel="stylesheet" href="markattendance.css">
        <header id="heading">
            <h1>Mark Attendance</h1>
        </header>
        <style>
            body{
            background-image: url("Images/sample7.jpg");
            background-repeat: repeat-y;
            background-size: cover;

        }
        </style>
    </head>
    <body>
        <form action="markattendance.php" method="GET" id="myform">
        <div id="options">
        <select required id="branches" name="branch" style="width:140px;height:35px;border-radius:10px;"  >
                <option value="">Branch</option>
                <option value="CSE" >CSE</option>
                <option value="IT">IT</option>
                <option value="ECE" >ECE</option>
                <option value="ME" >ME</option>
                <option value="EEE" >EEE</option>
                <option value="CE">CE</option>  
                
            </select>
            
            <select required id="secs" name="section" style="width:140px;height:35px;border-radius:10px;">
                <option value="">Section</option>
                <option value="A" >A</option>
                <option value="B" >B</option>
                <option value="C" >C</option>
                <option value="D" >D</option>
            </select>

            <input type="submit"  value="Load data">
            
            </form>
            <form action="loaddata.php" method="POST" >
            <select required id="periods" name="period" style="width:140px;height:35px;border-radius:10px;">
                <option value=''>Period</option>
                <option value="1" >1</option>
                <option value="2" >2</option>
                <option value="3" >3</option>
                <option value="4" >4</option>
                <option value="5" >5</option>
                <option value="6" >6</option>
                <option value="7" >7</option>
                
            </select>
            <input name='subject' type='text' placeholder="Enter subject" style="width:140px;height:35px;border-radius:10px;margin-right:30px;" required>

        </div>
        <div class="bodypart">
            <div id="list" style="overflow_x:auto;overflow_y:auto;">
                <?php
                        include_once 'include files/config.php';
                        
                        
                        if(isset($_GET['branch']) && isset($_GET['section']))
                        {
                            $branch="".$_GET['branch']."";
                            $section="".$_GET['section']."";
                            $sql = "SELECT * FROM student WHERE branch='$branch' AND section='$section'";
                            $result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
                            if(mysqli_num_rows($result)!=0)
                            {
                                echo "<table border='1' style='background-color:white'>";
                                echo "<thead>";
                                echo "<tr>";
                                echo "<th>Name</th>";
                                echo "<th>Roll No</th>";
                                echo "<th>Branch</th>";
                                echo "<th>Section</th>";
                                echo "<th>Status</th>";
                                echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                $count = 1;
                                while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
                                {
                                    echo "<tr>";

                                    echo "<td>".$row['name'] ."</td>";
                                  
                                    echo "<td>" . $row['username'] . "</td>";
                                    if(isset($_GET['branch'])&&isset($_GET['section'])){
                                        $branch = "".$_GET['branch']."";
                                        $section="".$_GET['section']."";

                                        echo "<td><input type='text' name='branch' value=".$branch." style='width:40px;'readonly></td>";

                                        echo "<td><input type='text' name='section' value=".$section." style='width:40px;' readonly></td>";
                                    }

                                    $studentno ="status".$count."";
                                    
                                    echo "<td> 
                                            <select style='background-color:whitesmoke' name='$studentno' required>
                                                <option value=''>status</option>
                                                <option value='present'>present</option>
                                                <option value='absent'>absent</option> 
                                            </select>    
                                          </td>";
                                    
                                    echo "</tr>";
                                    $count+=1;
                                }
                                $_SESSION['count'] = $count;
                                echo "</tbody>";
                                echo "</table>";
                                
                            }

                        }
                    ?>
                    <div class="popform">
                        <input type="submit" class="vbutton" value="Submit Attendance">
                    </div>
                    </form>
                    <div class="form-popup" id="myForm">
                    
                        <label for="username" style="color:white;font-family:Helvetica;font-size:110%;"><b>Enter your valid username to proceed</b></label>
                        <input type="text" id="in" placeholder="Username" name="username" required>
                        <button type="button" class="btn-cancel" onclick="closeForm()">Close</button>
                        
                    </div>    
                </div>
            


            <section id="faculty">
                <section id="fname">
                    <?php 
                        if(isset($_GET['name']))
                        {
                            $username = "".$_GET['name']."";
                            echo "<h1 style='color:brown'>Welcome $username!</h1>";
                        }
                    ?>
                    
                </section>
                <section id="back">
                   <a type="button">Back</a>
                </section>

            </section>
        </div>
    </body>
    <script type="text/javascript">
    function openForm() {
        document.getElementById("myForm").style.display = "block";
    }

    function closeForm() {
        document.getElementById("myForm").style.display = "none";
    }
    
    </script>
</html>
<?php
    unset($_SESSION['error']);
    unset($_SESSION['sucess']);
?>