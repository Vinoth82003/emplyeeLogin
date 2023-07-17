<?php 
session_start();
if (isset($_SESSION['id']) && $_SESSION['uname']) { 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>
<body>


<div class="container">
<div class="logout">
    <a href="logout.php" class="btn btn-dark">
      <i class="fas fa-sign-out-alt"></i> out
    </a>
    </div>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Employee Details</h5>
      <ul class="list-group">
        <li class="list-group-item list">
          <strong>Emp_Id:</strong> <?php echo $_SESSION['empid']; ?>
        </li>
        <li class="list-group-item list">
          <strong>Name:</strong> <?php echo $_SESSION['uname']; ?>
        </li>
        <li class="list-group-item list">
          <strong>Working Type:</strong> <?php echo $_SESSION['working_type']; ?>
        </li>
        <li class="list-group-item list">
          <strong>Salary:</strong> <?php echo $_SESSION['salary']; ?>
        </li>
        <li class="list-group-item list">
          <strong>No Of Days Worked:</strong> <?php echo $_SESSION['workeddays']; ?>
        </li>
      </ul>
    </div>
  </div>
</div>

</body>
</html>


<?php
}else{
    header('location:index.php?error=username and password is not set');
    exit();
}

?>