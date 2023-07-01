<?php
        $server="localhost";
        //$username="root";
        $pass="";
        $id=$_GET['id'];
        $ow=$_GET['ow'];
        $service=$_GET['service'];
        $date=$_GET['date'];


        // $on=$_POST['sid'];
        // $cat=$_POST['name'];
        // $st=$_POST['service'];
        // $dates=$_POST['dt'];
        // $un=$_POST['amt'];




?> 
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>INVOICE</title>
  </head>
  <body>
        <div class="container">
        <form action="invoice1.php"  method="post">
              <div class="form-group row">
                <label for="formGroupExampleInput"><b>service id</b></label>
                <input type="text" class="form-control" name="sid" id="sid" value="<?php echo $id;?>" readonly>
                <span></span>
              </div>
              <div class="form-group row">
                <label for="formGroupExampleInput2"><b>Name</b></label>
                <input type="text" class="form-control" name="name" id="name" value="<?php echo $ow;?>" readonly >
                <span></span>
              </div>
              <div class="form-group row">
                <label for="formGroupExampleInput2"><b>service </b></label>
                <input type="text" class="form-control" name="service" id="service" value="<?php echo $service;?>" readonly >
                <span></span>
              </div>
              <div class="form-group row">
                <label for="formGroupExampleInput2"><b>date</b></label>
                <input type="text" class="form-control" name="dt" id="dt" value="<?php echo $date ;?>" readonly>
                <span></span>
              </div>
              <div class="form-group row">
                <label for="formGroupExampleInput2"><b>Amount</b></label>
                <input type="text" class="form-control" name="amt" id="amt" >
                <span></span>
              </div>
              <input type="submit" class="btn btn-primary">
         </form>
        </div>
       

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <style>
        
        body{
            background: linear-gradient(90deg,#2396e3,#da2565);
            overflow:hidden;
            height: 10vh;
            margin: 100px;
            padding: 10px;
            width:400px;
            text-align:center;
        }
        .container{
                
                border-radius: 10px;
            width: 500px;

        }
        .form-group row {
            
            top: 50%;
            left:50%;
        }
  </style></body>
</html>