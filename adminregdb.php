<?php
include_once'config.php';

session_start();
$flag=0;

$username = "".$_POST['username']."";     //username and password are the names we have given for the from entry values.
$password = "".$_POST['password']."";
$confirmpwd="".$_POST['confirmpwd']."";

if($password!=$confirmpwd)
{
 echo "password missmatch";

}
else{
    $sql="INSERT into admintable(username,password)VALUES('$username','$password');";
    mysqli_query($conn,$sql);
}
echo"succesfully registered";



?>