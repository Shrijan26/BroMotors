<?php
    $username = $_POST['username'];
    $password = $_POST['password'];


    //Connection
    $db = mysqli_connect('localhost', 'root', '', 'vcs');
    if ($db->connect_error) {
        die('Connection Failed : ' .$conn->connect_error);
    } 
    else {
        $sql = "SELECT * FROM users WHERE username = '$username' and password = '$password'";
        $result = mysqli_query($db, $sql);
        $count = mysqli_num_rows($result);

        $role = "SELECT role FROM users where username = '$username'";
        $roleresult = mysqli_query($db, $role);
        $row = $roleresult->fetch_assoc();

        if ($count == 1) {
            if ($row["role"]== 'customer') {
                header("location: customer.php?username=$username");
                echo "login successfully";
            }
            else if ($row["role"]== 'admin') {
               header("location: admin.html");
               echo "login successfully";
            }
        }
        else {
            $error = "Your User Name or Password is invalid";
            echo $error;
            header("location: error.php");
        }

        exit;
    }
?>