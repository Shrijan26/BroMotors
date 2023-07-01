<?php
                $id=$_GET['id'];
                $iid=$_GET['iid'];
                $username=$_GET['username'];
                $mysqli = mysqli_connect('localhost', 'root','', 'vcs');
                if ($mysqli->connect_error) {
                die('Connect Error (' .$mysqli->connect_errno . ') '.$mysqli->connect_error);
                }
                $sql = "UPDATE invoice set invoice.status='paid' WHERE invoice.iid='$iid'";
                $result = $mysqli->query($sql);
                $mysqli->close();
                header("location: http://localhost/vsc/customer.php?username=$username");
                exit;
        ?>