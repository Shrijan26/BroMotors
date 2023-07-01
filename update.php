<?php


    //Connection
    $id=$_GET['id'];
    $db = mysqli_connect('localhost', 'root', '', 'vcs');
    if ($db->connect_error) {
        die('Connection Failed : ' .$conn->connect_error);
    } 
    else {
        //$sql="UPDATE staff SET current_status='free'";
        //$rr=$db->prepare($sql);
        //$rr->execute();
        $sql=" SELECT staffid FROM works WHERE serviceid='$id'";
        $res1=mysqli_query($db,$sql);
       
        while($row1=$res1->fetch_assoc()){
                $stid=$row1['staffid'];
                $role1 = "UPDATE staff SET current_status='free' WHERE sid='$stid'" ;
                $res2=mysqli_query($db,$role1);
        }
        $role1 = "DELETE from works WHERE serviceid='$id'" ;
        $res=mysqli_query($db,$role1);
        $role = "UPDATE service SET status='completed' WHERE id='$id'" ;
        $res=mysqli_query($db,$role);
        header("Location: http://localhost/vsc/admin.html");
        die();

        exit;
    }
?>