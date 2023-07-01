<?php
        $server="localhost";
        //$username="root";
        $pass="";
        // $id=$_GET['id'];
        // $ow=$_GET['ow'];
        // $service=$_GET['service'];
        // $date=$_GET['date'];


        $on=$_POST['sid'];
        $cat=$_POST['name'];
        $st=$_POST['service'];
        $dates=$_POST['dt'];
        $un=$_POST['amt'];



        $conn=mysqli_connect($server,"root",$pass,'vcs');
        $sql="Select username  from service where id=$on";
        $result = $conn->query($sql);
        $rr='';
        while($row=$result->fetch_assoc())
        {
                $rr=$row['username'];
        }

        if(!$conn){
               die('Error:cant connect');
        }
        else{
                //$query="SELECT name from "
              $stmt = $conn->prepare("insert into invoice(sid,username,name,service,date,amount,status) values(?,?,?,?,?,?,'unpaid')");
              $stmt->bind_param("issssi",$on,$rr,$cat,$st,$dates,$un);
                $stmt->execute();
               echo "New Service Registered Successfully";
               header("location: http://localhost/vsc/admin.html");
               exit;
        }

?> 