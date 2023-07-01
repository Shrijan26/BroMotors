<?php

        $username=$_GET['username'];


?>  
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Service</title>
  </head>
  <body>
    <div class="container">
      <div class="row col-md-6 col-md-offset-3">
        <div class="panel panel-primary">
          <div class="panel-heading text"><h1>Service Request</h1></div>
          <div class="panel-body">
            <form action="service1.php"  method="post">
              <div class="form-group row">
                <label for="formGroupExampleInput">Vehicle No</label>
                <input type="text" class="form-control" name="car_no" id="car_no" placeholder="Car No">
                <span></span>
              </div>
              <div class="form-group row">
                <label for="formGroupExampleInput">UserName</label>
                <input type="text" class="form-control" name="un" id="un" value="<?php echo $username;?>" readonly>
                <span></span>
              </div>
              <div class="form-group row">
                <label for="formGroupExampleInput2">Owner Name</label>
                <input type="text" class="form-control" name="owner_name" id="owner_name" placeholder="Name">
                <span></span>
              </div>
              <div class="form-group row">
                <label for="formGroupExampleInput2">Category</label>
                <!-- <input type="text" class="form-control" name="category" id="category" placeholder="Category"> -->
                <select class="custom-select" name="category" id="category">
                  <option selected>select category</option>
                  <option value="2">2 wheeler</option>
                  <option value="3">3 wheeler</option>
                  <option value="4">4 wheeler</option>
                </select>
                <span></span>
              </div>
              <div class="form-group row">
                <label for="formGroupExampleInput2">Service Type</label>
                <input type="text" class="form-control" name="service_type" id="service_type" >
                <span></span>
              </div>
              <div class="form-group row">
                <label for="formGroupExampleInput2">Date</label>
                <input type="date" class="form-control" name="dt" id="dt" placeholder="Date">
                <span></span>
              </div>
              <input type="submit" class="btn btn-primary">
              </form>
          </div>
        </div>
      </div>
    </div>
     
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <style>
      body{
        justify-content: center;
            padding: 10px;
            font-family: montserrat;
            background: linear-gradient(120deg,#2396e3,#da2565);
            /* height: 100vh; */
            overflow: hidden;   
      }
      .container {
           position: absolute;
           padding: 55px;
           padding-top: 33px;
           top: 50%;
           left: 50%;
           transform: translate(-50%, -50%);
           width: 40%;
           background-color: white;
          border-radius: 10px;
    }
        h1{
          margin-top=5%;
          display: inline;
          font-size:x-large;
          font-weight:bolder;
        }
      
    </style>
  </body>
</html>