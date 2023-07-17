<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

</head>
<body>
    
    <div class="admin-login">
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

        <div class="formcontainer">
            <form action="adminlogin.php" method="post" class="form">
                <div class="loghead"><h1>Admin</h1></div>
                <div class="input-fields">
                    <label for="uname">
                     <i class="fas fa-user"></i> <input type="text" name="uname" placeholder="user name">
                    </label>
                    <label for="password">
                     <i class="fas fa-lock"></i> <input type="password" name="password" placeholder="********">
                    </label>
                    <button type="submit" name ="login" ><i class="fas fa-check"></i> submit</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>