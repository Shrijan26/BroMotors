<?php


    //Connection
    $sid=$_GET['sid'];
    $staffid=$_GET['staffid'];
    $db = mysqli_connect('localhost', 'root', '', 'vcs');
    if ($db->connect_error) {
        die('Connection Failed : ' .$conn->connect_error);
    } 
    else {
        $role = "UPDATE staff SET current_status='not available' WHERE sid='$staffid'" ;
        $res=mysqli_query($db,$role);
        $stmt = $db->prepare("insert into works values(?,?)");
              $stmt->bind_param("ii",$sid,$staffid);
                $stmt->execute();
        header("Location: http://localhost/vsc/admin.html");
        die();

        exit;
    }
?>