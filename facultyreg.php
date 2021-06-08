<?php
    include_once'include files/config.php';

    session_start();
    $flag=0;
    $name = "".$_POST['name']."";
    $username = "".$_POST['username']."";     //username and password are the names we have given for the from entry values.
    $password = "".$_POST['password']."";
    $confirmpwd="".$_POST['confirmpwd']."";
    
    if($username ==""){
        $_SESSION["error"] = "Username field  is required";
        header("location: addfaculty.php"); //send user back to the login page.
    }
    elseif(strlen($username)<3){
        $_SESSION["error"] = "Username should be minimum 3 characters";
        header("location: addfaculty.php"); //send user back to the login page.
    }
    
    elseif($password==""){
        $_SESSION["error"] = "Password field is required";
        header("Location: addfaculty.php");

    }
    elseif($password!=$confirmpwd)
    {
        $_SESSION['error']="Passwords did not match";
        header("Location: addfaculty.php");
    }
    else{
        
        $sql="INSERT into faculty(name,username,password)VALUES('$name','$username','$password');";
        mysqli_query($conn,$sql) or die('error while inserting');
        //faculty has been added to faculty table.

        $sql2 = "CREATE TABLE $name ( id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
                                           date date NOT NULL,
                                           period1 VARCHAR(100) NOT NULL,
                                           period2 VARCHAR(100) NOT NULL,
                                           period3 VARCHAR(100) NOT NULL,
                                           period4 VARCHAR(100) NOT NULL,
                                           period5 VARCHAR(100) NOT NULL,  
                                           period6 VARCHAR(100) NOT NULL,
                                           period7 VARCHAR(100) NOT NULL)";
        mysqli_query($conn,$sql2) or die(mysqli_error($conn)); 
        $_SESSION['error']=$name." has been added successfully";
        header("Location: addfaculty.php");                                  

        

    }



?>