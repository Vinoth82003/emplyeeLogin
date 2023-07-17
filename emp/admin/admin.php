<?php
session_start();
include 'conn.php';
if (isset($_SESSION['id']) && isset($_SESSION['admin'])) {

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <div class="admin-container">
    <?php
        if (isset($_GET['error'])) {
            echo '<div class="error">
                    <div class="alert alert-danger"  role="alert">
                       <i class="fas fa-exclamation-circle"></i> '.$_GET['error'].'
                    </div>
                  </div>';
        }elseif (isset($_GET['success'])) {
            echo '<div class="error">
                 <div class="alert alert-success" role="alert">
                    <i class="fas fa-check-circle"></i> 
                    '.$_GET['success'].'
                  </div> 
                  </div>         
            ';
        }

    ?>
 
        <div class="sidemenu-container">
            <div class="sidemenu">
                <ul class="menu">
                    <li index="1" class="menulist filter active"><i class="fas fa-globe"></i> <div class="text">All</div> </li>
                    <li index="2" class="menulist filter "><i class="fas fa-sun"></i><div class="text"> Daily</div> </li>
                    <li index="3" class="menulist filter "><i class="far fa-calendar"></i><div class="text"> Monthly</div> </li>
                    <li class="menulist editBtn"><i class="fas fa-edit"></i> Edit</li>
                    <li class="menulist addBtn"><i class="bi bi-icon-name"></i> Add</li>
                </ul>
            </div>
            <div class="logout">
                <a href="logout.php" class="btn btn-dark">
                    <i class="fas fa-sign-out-alt"></i> <div class="text">out</div>
                </a>                  
            </div>
        </div>

       <div class="editInput">
        <form action="adminlogin.php" method="post" class="editform">
            <input type="text" name="empid" placeholder="empid">
            <input type="text" name="uname" placeholder="username">
            <select name="working_type">
                <option value="">select</option>
                <option value="daily">Daily</option>
                <option value="monthly">Monthly</option>
            </select>
            <input type="text" name="workeddays" placeholder="worked days">
            <input type="text" name="salary" placeholder="salary">
            <input type="hidden" name="password" placeholder="password" class="password">
            <button type="submit" name = "edit" class="editbtn">Change</button>
            <button type="submit" name = "add" class="addbtn">Add</button>
        </form>
       </div>
      
        <div class="employeeTable">
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th>Emp ID</th>
                    <th>Name</th>
                    <th>Working Type</th>
                    <th>Worked Days</th>
                    <th>Salary</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
        <?php
        
        // Assuming you have established a database connection
        
        $sql = "SELECT * FROM `employee` WHERE 1;";
        $result = mysqli_query($conn, $sql);
        
        if (mysqli_num_rows($result) > 0) {
        
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<tr>';
                echo '<td>' . $row['empid'] . '</td>';
                echo '<td>' . $row['uname'] . '</td>';
                echo '<td class="jobtype">' . $row['working_type'] . '</td>';
                echo '<td>' . $row['workeddays'] . '</td>';
                echo '<td>' . $row['salary'] . '</td>';
                echo '<td> 
                <div class="btns">
                <form action="adminlogin.php" method="post">
                <button type = "submit" name="delete" value='.$row['empid'].' class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i> </button> 
                </form>
                </div>
                </td>'
                ;
                echo '</tr>';
            }
        } else {
            echo 'No records found.';
        }
        
        // Close the database connection
        mysqli_close($conn);
        ?>
                </tbody>
            </table>
                           
              
        </div>
    </div>
    <script src="admin.js"></script>
</body>
</html>

<?php

}

?>


      