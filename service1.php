<?php
        include 'customer.php';
        $server="localhost";
        //$username="root";
        $pass="";
        //$id=1;
        $crn=$_POST['car_no'];
        $on=$_POST['owner_name'];
        $cat=$_POST['category'];
        $st=$_POST['service_type'];
        $date=$_POST['dt'];
        $un=$_POST['un'];



        $conn=mysqli_connect($server,"root",$pass,'vcs');
        if(!$conn){
               die('Error:cant connect');
        }
        else{
                //$query="SELECT name from "
              $stmt = $conn->prepare("insert into service(car_no,username,owner_name,category,service_type,date,status) values(?,?,?,?,?,?,'pending')");
              $stmt->bind_param("ssssss",$crn,$un,$on,$cat,$st,$date);
                $stmt->execute();
               echo "New Service Registered Successfully";
               header("location: http://localhost/vsc/customer.php?username=$un");
               exit;
        }

?>   
