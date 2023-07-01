<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Request</title>
  </head>
  <body>
        <?php
               $username=$_GET['username'];
                $mysqli = mysqli_connect('localhost', 'root', '', 'vcs');
                if ($mysqli->connect_error) {
                die('Connect Error (' .$mysqli->connect_errno . ') '.$mysqli->connect_error);
                }
                $sql = " SELECT * FROM invoice where username='$username' ";
                $result = $mysqli->query($sql);
                $mysqli->close();
        ?>

    <h1>PAID</h1>

    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">iid</th>
      <th scope="col">sid</th>
      <th scope="col">name</th>
      <th scope="col">service</th>
      <th scope="col">date</th>
      <th scope="col">amount</th>
      <th scope="col">status</th>
      <th scope="col">pay</th>
      
    </tr>
  </thead>
  <tbody>
         <?php
                
                while($row=$result->fetch_assoc())
                {
                        echo"<tr>
                        <td>" . $row["iid"] . "</td>
                        <td>" . $row["sid"] . "</td>
                        <td>" . $row["name"] . "</td>
                        <td>" . $row["service"] . "</td>
                        <td>" . $row["date"] . "</td>
                        <td>" . $row["amount"] . "</td>
                        <td>" . $row["status"] . "</td>";
                        if($row["status"]=='unpaid'){
                              echo  "<td> <a class='btn btn-primary btn-sm' href='payment.php?id=$row[sid]&username=$username&iid=$row[iid]'>pay</a></td> ";
                        }
                        else{
                                echo "<td> <a class='btn btn-secondary btn-sm'>paid</a></td> ";
                        }
                   echo"     
                    </tr>
                    "; 
         
               
                }
                ?>
  </tbody>
</table>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>