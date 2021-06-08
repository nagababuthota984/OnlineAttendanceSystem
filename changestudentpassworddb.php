<?php
include_once 'include files/config.php';
session_start();
$flag=0;
$username = "".$_POST['username']."";     //username and password are the names we have given for the from entry values.
$oldpassword = "".$_POST['oldpassword']."";
$newpassword="".$_POST['newpassword']."";



if($newpassword==$oldpassword)
{
    $_SESSION["error"] = "You really changed nothing!";
    header("location: changestudentpassword.php"); //send user back to the login page.


}

else{
    $query = "SELECT * FROM student WHERE username='$username'";
    $result = mysqli_query($conn,$query) or die("error");
    if(mysqli_num_rows($result)!=0)
    {
        while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
        {
            if($row['password'] == $oldpassword && $row['username']==$username )
            {
                // $_SESSION["username"] = $username;
                $flag=1;
                $_SESSION["error"] = "Succesfully Changed";
                $update_posts = "UPDATE student SET password='$newpassword'  WHERE password='$oldpassword'";  

                 mysqli_query($conn,$update_posts);
                header("location:changestudentpassword.php");
            }
            
        }
        
    }
    if($flag!=1)
        
        {
            
            $_SESSION["error"] = "Invalid username";
            header("location:adminchangepassword.php"); //send user back to the login page.
        }
       
    }


?>