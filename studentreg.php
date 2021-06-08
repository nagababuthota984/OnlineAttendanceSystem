<?php
    include_once'include files/config.php';

    session_start();
    $flag=0;
    $branch = "".$_POST["branch"]."";
    $section = "".$_POST['section']."";
    $name = "".$_POST['name']."";
    $username = "".$_POST['username']."";     //username and password are the names we have given for the from entry values.
    $password = "".$_POST['password']."";
    
    // echo $name."</br>";
    // echo $username."</br>";
    // echo $password."</br>";
    // echo $branch."</br>";
    // echo $section."</br>";

    
    
    if(isset($_POST['branch']))
    {
        echo $branch;
    }
    if($username ==""){
        $_SESSION["error"] = "Username field  is required";
        header("location: addstudent.php"); //send user back to the login page.
    }
    elseif(strlen($username)<3){
        $_SESSION["error"] = "Username should be minimum 3 characters";
        header("location: addstudent.php"); //send user back to the login page.
    }
    
    elseif($password==""){
        $_SESSION["error"] = "Password field is required";
        header("Location: addstudent.php");

    }
    elseif($branch=="")
    {
        $_SESSION['error'] = "Branch was not selected.".$branch;
        header("Location: addstudent.php");
    }
    elseif($section=="")
    {
        $_SESSION['error'] = "Section was not selected.";
        header("Location: addstudent.php");
    }
    
    else{
        
        $sql="INSERT into student(name,username,password,branch,section)VALUES('$name','$username','$password','$branch','$section');";
        mysqli_query($conn,$sql) or die(mysqli_error($conn));
        //faculty has been added to faculty table.

        $tablename = str_replace(' ', '', $name);
        echo $tablename."</br>";
        $sql2 = "CREATE TABLE $tablename ( id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
                                           date date NOT NULL,
                                           period1 VARCHAR(100) NOT NULL,
                                           period2 VARCHAR(100) NOT NULL,
                                           period3 VARCHAR(100) NOT NULL,
                                           period4 VARCHAR(100) NOT NULL,
                                           period5 VARCHAR(100) NOT NULL,  
                                           period6 VARCHAR(100) NOT NULL,
                                           period7 VARCHAR(100) NOT NULL)";
        mysqli_query($conn,$sql2) or die(mysqli_error($conn)); 
        $flag=1;
        $_SESSION['error']=$name." has been added successfully";
        header("Location: addstudent.php");                                  

        

    }
    



?>