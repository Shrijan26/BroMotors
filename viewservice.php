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
                $un=$_GET['username'];
                $mysqli = mysqli_connect('localhost', 'root','', 'vcs');
                if ($mysqli->connect_error) {
                die('Connect Error (' .$mysqli->connect_errno . ') '.$mysqli->connect_error);
                }
                $sql = " SELECT * FROM service WHERE username='$un'";
                
                $result = $mysqli->query($sql);
               
                $mysqli->close();
        ?>

    <h1>SERVICE RECORD</h1>

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
      
    </tr>
  </thead>
  <tbody>
         <?php
         $cl="table-danger";
                
                while($rows=$result->fetch_assoc())
                {
         ?>
                <tr>
                <td><?php  echo $rows['id'];?></td>
                <td><?php echo $rows['car_no'];?></td>
                <td><?php echo $rows['username'];?></td>
                <td><?php echo $rows['owner_name'];?></td>
                <td><?php echo $rows['service_type'];?></td>
                <td><?php echo $rows['date'];?></td>
                <td><?php echo $rows['status'];?></td>
                
            </tr>
            <?php
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