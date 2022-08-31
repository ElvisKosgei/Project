<?php
include "connect.php";
if(isset($_POST["Submit"])){
    $name=$_POST["name"];
    $email=$_POST["email"];
    $mobile=$_POST["mobile"];
    $password=$_POST["password"];

    $sql="insert into 'crud'(name,email,mobile,password) values('$name','$email','$mobile','$password')";
    $result=mysqli_query($con,$sql)
    if($result){
        echo"Data inserted successfully"
    }else{
        die(mysqli_error($con))
    }
}

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

    <title>Crud Operation</title>
  </head>
  <body>
    <div class="container my-5">
    <form method="post">
  <div class="form-group">
    <label>Name</label>
    <input type="text" class="form-control" placeholder="Enter your Name" name="name">
    <small id="emailHelp" class="form-text text-muted">We'll never share your information with anyone else.</small>
  </div>
  <div class="form-group">
    <label>Email Address</label>
    <input type="email" class="form-control" placeholder="Enter your Email Address" name="email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your information with anyone else.</small>
  </div>
  <div class="form-group">
    <label>Phone Number</label>
    <input type="tel" class="form-control" placeholder="Enter your Phone Number" name="mobile">
    <small id="emailHelp" class="form-text text-muted">We'll never share your information with anyone else.</small>
  </div>
  <div class="form-group">
    <label>Password</label>
    <input type="text" class="form-control" placeholder="Enter your Password" name="password">
    <small id="emailHelp" class="form-text text-muted">We'll never share your information with anyone else.</small>
  </div>
  
  <button type="Submit" class="btn btn-primary">Submit</button>
</form>

    </div>

   
  </body>
</html>