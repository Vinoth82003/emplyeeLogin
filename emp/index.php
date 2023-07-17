<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>employee login</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
</head>
<body>
    <div class="container">
        <div class="form-container">
            <?php
            if (isset($_GET['error'])) {
               
                echo '<div class="error">
                <p class="msg">'.$_GET['error'].'</p>
                 <div class="bar"></div>
                </div>';
           
            }elseif (isset($_GET['success'])) {
                echo '<div class="success">
                <p class="msg">'.$_GET['success'].'</p>
                 <div class="bar"></div>
                </div>';
            }
            ?>
            <div class="left-form">
                <img src="img/login-img.png" alt="" class="leftimg">
            </div>
            <div class="mid-line"></div>
            <div class="right-form">
                <form action="login.php" method="post" class="form">
                    <div class="head"><h1>login</h1></div>

                    <div class="inputfield">
                        <label for="uname">
                            <div class="icon"><img src="img/account.png" alt=""></div>
                            <input type="text" name="uname" id="uname" placeholder="uname">
                        </label>

                        <label for="password">
                            <div class="icon"><img src="img/lock.png" alt=""></div>
                            <input type="password" name="password" id="password" placeholder="********">
                        </label>

                        <button type="submit" class="submit" name="login">
                         <i class="fas fa-sign-in-alt"></i> login
                        </button>

                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>