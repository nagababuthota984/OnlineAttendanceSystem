<?php
    include_once "include files/config.php";
    session_start();
    $flag=0;
    //get username and password from the form.
    $username = "".$_POST["username"]."";     
    $password = "".$_POST["password"]."";
    
    // if($username == "admin"){
    //     $_SESSION["username"] = $username;
    //     header("location: ../adminoptions.php"); //send user to homepage, for example.
    // }
   
    if($username ==""){
        $_SESSION["error"] = "Username field  is required";
        header("location: adminlogin.php"); //send user back to the login page.
    }
    elseif(strlen($username)<3){
        $_SESSION["error"] = "Username  should be minimum 3 characters";
        header("location: adminlogin.php"); //send user back to the login page.
    }
    
    elseif($password==""){
        $_SESSION["error"] = "Password field is required";
        header("Location: adminlogin.php");

    }
    
    else
    {
    
    
        $query = "SELECT * FROM admintable WHERE username='$username'";
        $result = mysqli_query($conn,$query) or die("error");
        if(mysqli_num_rows($result)!=0)
        {
        
            while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
            {
                if($row['password'] == $password )
                {
                    $_SESSION['username'] = $username;
                    $flag=1;
                    header("Location: adminoptions.php?name=".urlencode($username));
                }
                
            }
            
        }
        if($flag==0)
            {
                $_SESSION["error"] = "Invalid username or password";
                header("location: adminlogin.php"); //send user back to the login page.
            }
   }

    

?>