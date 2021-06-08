<?php
    include_once "include files/config.php";
    session_start();
    $flag=0;
    $username = "".$_POST['username']."";
    $password = "".$_POST['password']."";

    if($username ==""){
        $_SESSION["error"] = "Username field  is required";
        header("location: student.php"); //send user back to the login page.
    }
    elseif(strlen($username)<3){
        $_SESSION["error"] = "Username  should be minimum 3 characters";
        header("location: student.php"); //send user back to the login page.
    }
    
    elseif($password==""){
        $_SESSION["error"] = "Password field is required";
        header("Location: student.php");

    }
    
    else
    {
    
    
        $query = "SELECT * FROM student WHERE username='$username'";
        $result = mysqli_query($conn,$query) or die("error");
        if(mysqli_num_rows($result)!=0)
        {
        
            while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
            {
                if($row['password'] == $password )
                {
                    $_SESSION['username'] = $username;
                    $flag=1;
                    header("Location: studentoptions.php?name=".urlencode($row['name']));
                }
                
            }
            
        }
        if($flag==0)
            {
                $_SESSION["error"] = "Invalid username or password";
                header("location: student.php"); //send user back to the login page.
            }
   }

    

?>

    



