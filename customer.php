<?php
$un=$_GET['username'] ;
$db = mysqli_connect('localhost', 'root', '', 'vcs');
    if ($db->connect_error) {
        die('Connection Failed : ' .$conn->connect_error);
    } 
    else {
      $name= "SELECT name FROM users WHERE username='$un'";
        $result = mysqli_query($db, $name);
        $rr=$result->fetch_assoc();
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Customer</title>
  </head>
  <body>

    <h1>WELCOME <?php echo $rr["name"];?></h1><br>
    <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">SERVICE</h5>
          <p class="card-text">click to view or book your service<p>
          <?php echo"<a href='service.php?username=$un' class='card-link'>Book service</a>";?>
         <?php echo"<a href='viewservice.php?username=$un' class='card-link'>View service</a>";?>
         <?php echo"<a href='paidinvoice.php?username=$un' class='card-link'>Pay</a>";?>
        </div>
      </div>
      <br>
      <a href="logout.php" class="btn btn-primary">log out</a>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <style>
        body{
                display: flex;
                padding: 10px;
                justify-content: center;
                background:linear-gradient(90deg,rgb(0, 123, 255),rgb(210, 0, 81));
                
        }
        
        .card {
                position: absolute;
                align-items: center;
                top: 30%;
                
                
        }
        .card-body{
          width:300px;
        }
        h1{
                font-weight: bolder;
                color: white;
        }
        
        .btn  {
          position: bottom;
       top:60%;
       left:45%;
       width:100px;
       height:40px;
       position: absolute;
       z-index: 2;
       background: blue; 
      }
    </style>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>