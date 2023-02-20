<?php 

include('./db_configuration/base_address.php');
include('./db_configuration/config.php');

session_start();
  if(!isset($_SESSION['username']))
  {
    header("location:login.php");
  }
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    
  </head>
  <body>



  
    
    <div class="container">
      <form method="POST">
<a type="button" class="btn btn-outline-danger" href="logout.php">Logout</a>
      <div class="mb-3">
        <label class="form-label"><strong>Username:</strong></label>
        <input type="text" class="form-control" id="username" name="updUsername" aria-describedby="emailHelp" value="">
      </div>

      <div class="mb-3">
        <label class="form-label"><strong>Email:</strong></label>
        <input type="email" class="form-control" id="username" name="updEmail" aria-describedby="emailHelp" value="">
      </div>

       <div class="mb-3">
        <label class="form-label"><strong>Password:</strong></label>
        <input type="text" class="form-control" id="username" name="updPassword" aria-describedby="emailHelp" value="">
      </div>

       <div class="mb-3">
        <label class="form-label"><strong>Upload Avatar:</strong></label>
        <input type="file" class="form-control" id="username" name="updImages" aria-describedby="emailHelp">
      </div>

      <button type="submit" class="btn btn-primary form-control" name="updateData">Update Existing Data</button>
    </form>

       
    </div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>