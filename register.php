<?php

        //$server="localhost";
        //$username="root";
       // $pass="";
        //$id=1;
        $un=$_POST['custid'];
        $name=$_POST['Name'];
        $pass=$_POST['pass'];
        $idp=$_POST['idp'];
      



        $conn=mysqli_connect("localhost","root","",'vcs');
        if(!$conn){
               die('Error:cant connect');
        }
        else{
              $stmt = $conn->prepare("insert into users(username,name,password,idproof)values(?,?,?,?)");
              $stmt->bind_param("ssss",$un,$name,$pass,$idp);
                $stmt->execute();
               echo "New User Registered Successfully";
                //exit;
                header("location: login.html");

        }
        

?>   