 <?php

        $server="localhost";
        $username="root";
        $pass="";
        //$id=1;
        $n=$_POST['name'];
        $dn=$_POST['domain'];
        $date=$_POST['dt'];



        $conn=mysqli_connect($server,$username,$pass,'vcs');
        if(!$conn){
               die('Error:cant connect');
        }
        else{
              $stmt = $conn->prepare("insert into staff(name,domain,current_status,start_date) values(?,?,'free',?)");
              $stmt->bind_param("sss",$n,$dn,$date);
                $stmt->execute();
               echo "New Staff Registered Successfully";
               header("Location: http://localhost/vsc/admin.html");
               exit;
        }

?> 