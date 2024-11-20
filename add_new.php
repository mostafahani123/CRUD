<?php
include "db_conn.php";

if(isset($_POST['submit'])){
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$gender = $_POST['gender'];



$sql = "INSERT INTO `users`(`id`,`first_name`,`last_name`,`email`,`gender`) VALUES (NULL,'$first_name','$last_name','$email','$gender')";

$result  = mysqli_query($conn, $sql);

if($result){
    header("location: index.php?msg=New record created successfully");
}else{
    echo "feild:" . mysqli_error($conn);
}
}



?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootsrtap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<!-- Font Awesome -->
    <title>php crud </title>
</head>
<body>
    
<nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color:#00ff5573;">
PHP COMPELETE CRUd APP
</nav>

<div class="container">
    <div class="text-center mb-4">
        <h3>Add New User</h3>
           <p class="text-muted">compelete the form below to add a new user </p>
    </div>
    <div class="contanier d-flex justify-content-center">
<form action="" method="POST" style="width:50vw;  main-width:300px;">
    <div class="row">
        <div class="col">
        <label class="form-label">First name:</label>
        <input type="text" class="form-control" name="first_name" placeholder="Albert">
        </div>

        <div class="col">
        <label class="form-label">last Name:</label>
        <input type="text" class="form-control" name="last_name" placeholder="Einstein">
        </div>
    </div>
        <div>
        <label class="form-label">Email:</label>
        <input type="email" class="form-control" name="email" placeholder="name@example.com">
        </div>

        <div class="form-group mp-3">
        <label for="male" class="form-input-label">Male</label>
     
            <input type="radio" class="form-check-input" name="gender" id="male" value="male">
      
            <label for="female"class="from-input-label">female</label>
         
           
            <input type="radio" class="form-check-input" name="gender" id="female" value="female">
        </div>
        <button type="submit" class="btn btn-success" name="submit">Save</button>
        <a href="index.php" class="btn btn-danger">Cancel</a>
</form>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>