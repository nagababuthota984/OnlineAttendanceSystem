<?php
session_start();
    include_once 'include files/config.php';
    $loginusername= $_SESSION['username'];
    $period = "".$_POST['period']."";
    $subject = strtoupper("".$_POST['subject']."");
    $branch = "".$_POST['branch']."";
    $section = "".$_POST['section']."";
    $status = array();

    
  
    $total=$_SESSION['count'];

    $temp = 1;
    $totalstrength = $total-1;
    $total-=1;
    $strength=0;
    while($temp<=$total)
    {
        $var = 'status'.$temp.'';
        $status[] = "".$_POST[$var]."";
        $temp+=1;
    }
    
   while($total>0)
   {

       if($_POST["status".$total.""]=='present')
       {
           $strength+=1;
       }
       
       $total-=1;
   }
   
   $query = "SELECT * FROM faculty WHERE username='$loginusername'";
   $result = mysqli_query($conn,$query) or die(mysqli_error($conn));
   
   if(mysqli_num_rows($result)!=0)
   {
   
       while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
       {
           if( $row['username']==$loginusername)
           {
               
               $name=strtolower($row['name']);
               $name=str_replace(' ', '', $name);
               $flag=1;
               $periodno = "period".$period."";
               
               $content ="".$branch."_".$section."_".$subject."_".$strength."_".$totalstrength."";
               //first check whether todays date in the table
               $isfirstperiod = mysqli_query($conn,"SELECT * FROM $name WHERE date = curdate()")or die(mysqli_error($conn));
               if(mysqli_num_rows($isfirstperiod)==0)
               {
                    $sql = "INSERT INTO $name (date,$periodno) VALUES (curdate(),'$content')";
                    mysqli_query($conn,$sql)or die(mysqli_error($conn));
                    
               }
               else
               {
                   //this means already some data of this day has been recorded. we just now have to fill the remaining periods.
                   $query = "UPDATE $name SET $periodno='$content' WHERE date=curdate()";
                   mysqli_query($conn,$query) or die(mysqli_error($conn));
                   
               }
               
           }
           
       }
       
   }
   //student updations..
   $stuquery = "SELECT * FROM student WHERE branch='$branch' AND section='$section'";
   $sturesult = mysqli_query($conn,$stuquery) or die(mysqli_error($conn));
   if(mysqli_num_rows($sturesult)!=0)
   {
       $counter=1;
       while($sturow = mysqli_fetch_array($sturesult,MYSQLI_ASSOC))
       {
           $stuname = strtolower($sturow['name']);
           $stuname = str_replace(' ','',$stuname);
           $statusid = "status".$counter."";
           $status = "".$_POST[$statusid]."";
           $counter+=1;
           
           $content = "".$subject."_".$status."";
           //first check whether todays date in the table
           $isfirstperiod = mysqli_query($conn,"SELECT * FROM $stuname WHERE date = curdate()")or die(mysqli_error($conn));
           if(mysqli_num_rows($isfirstperiod)==0)
           {
                $stusql = "INSERT INTO $stuname (date,$periodno) VALUES (curdate(),'$content')";
                mysqli_query($conn,$stusql)or die(mysqli_error($conn));
                
           }
           else
           {
               //this means already some data of this day has been recorded. we just now have to fill the remaining periods.
               $stuquery = "UPDATE $stuname SET $periodno='$content' WHERE date=curdate()";
               mysqli_query($conn,$stuquery) or die(mysqli_error($conn));
            
           }
       }
   }


 ?>