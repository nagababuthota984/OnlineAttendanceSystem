<?php
include_once 'include files/config.php';
session_start();
$flag=0;
$oldpassword = "".$_POST['oldpassword']."";     //username and password are the names we have given for the from entry values.
$newpassword = "".$_POST['newpassword']."";
$confirmpwd="".$_POST['confirmpwd']."";

if(isset($_GET['name']))
{
    $username = "".$_GET['name']."";

    
}
 if($oldpassword==$newpassword)
 {
     $_SESSION["error"]="Newpassword is same as old one !!";
     header("location: iadminchangepassword.php"); //send user back to the login page.

 }
elseif($newpassword!=$confirmpwd)
{
    $_SESSION["error"] = "Password Mismatch";
    header("location: adminchangepassword.php"); //send user back to the login page.


}
else{
    $query = "SELECT * FROM admintable WHERE password='$oldpassword'";
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
                $update_posts = "UPDATE admintable SET password='$newpassword'  WHERE password='$oldpassword'";  

                 mysqli_query($conn,$update_posts);
                header("location:adminchangepassword.php");
            }
            
        }
        
    }
    if($flag!=1)
        
        {
            
            $_SESSION["error"] = "Invalid old password";
            header("location:adminchangepassword.php"); //send user back to the login page.
        }
       
    }


?>