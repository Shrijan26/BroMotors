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
               
                $mysqli = mysqli_connect('localhost', 'root', '', 'vcs');
                if ($mysqli->connect_error) {
                die('Connect Error (' .$mysqli->connect_errno . ') '.$mysqli->connect_error);
                }
                $sql = " SELECT * FROM service WHERE service.status='completed'";
                $result = $mysqli->query($sql);
                $sql1="SELECT sid FROM invoice ";
                $mysqli->close();
        ?>

    <h1>COMPLETED REQUESTS</h1>

    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Car_NO</th>
      <th scope="col">username</th>
      <th scope="col">Owner_Name</th>
      <th scope="col">service_type</th>
      <th scope="col">date</th>
      <th scope="col">status</th>
      <th scope="col">action</th>
    </tr>
  </thead>
  <tbody>
         <?php
                
                while($row=$result->fetch_assoc())
                {
                        echo"<tr>
                        <td>" . $row["id"] . "</td>
                        <td>" . $row["car_no"] . "</td>
                        <td>" . $row["username"] . "</td>
                        <td>" . $row["owner_name"] . "</td>
                        <td>" . $row["service_type"] . "</td>
                        <td>" . $row["date"] . "</td>
                        <td>" . $row["status"] . "</td>
                        <td>
                        <a class='btn btn-primary btn-sm' href='invoice.php?id=$row[id]&amp;ow=$row[owner_name]&amp;service=$row[service_type]&amp;date=$row[date];'>Generate Invoice</a>
                        </td>
                    </tr>
                    "; 
         
               
                }
                ?>
  </tbody>
</table>
<a href="admin.html" class="btn btn-primary">back</a>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>