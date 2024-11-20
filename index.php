


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
    <?php 
if(isset($_GET['msg'])){
$msg = $_GET['msg'];
echo '<div class="alert alert-danger" role="alert">
  "'.$msg.'"
</div>';
}
    ?>
    <a href="add_new.php" class="btn btn-dark mb-3">Add new </a>


    <table class="table table-dark table-hover tabel-center">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">First name</th>
      <th scope="col">Last name</th>
      <th scope="col">Email</th>
      <th scope="col">Gender</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
    include "db_conn.php";
    $sql =" SELECT * FROM `users`";
    $result = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_assoc($result)){?>


<tr>
      <th scope="row"><?php echo $row['id']; ?></th>
      <td><?php echo $row['first_name']; ?></td>
      <td><?php echo $row['last_name']; ?></td>
      <td>@<?php echo $row['email']; ?></td>
      <td>@<?php echo $row['gender']; ?></td>
      <td>
        <a class="btn btn-success" href="edit.php?id=<?php echo $row['id']?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i>Edit</a>
        <a class="btn btn-danger" href="delete.php?id=<?php echo $row['id'] ?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i>Delete</a>
      </td>
    </tr>

      <?php  
    }
    ?>

  </tbody>
</table>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>