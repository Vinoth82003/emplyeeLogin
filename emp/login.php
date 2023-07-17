<?php
session_start();
include 'conn.php';

if (isset($_POST['uname']) && isset($_POST['password'])) {
    
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);

        return $data;
    }

    $uname = validate($_POST['uname']);
    $password = validate($_POST['password']); 

    

    if (empty($uname)) {
        header('location:index.php?error=uname is requiered !');
        exit();
    } elseif (empty($password)) {
        header('location:index.php?error= password is requiered !');
    exit();
    }else{

       
        
        $sql = "SELECT * FROM `employee` WHERE `uname` = '$uname' AND `password` = '$password';";
        $result = mysqli_query($conn,$sql);

        if ($result && mysqli_num_rows($result) === 1) {
            
            $row = mysqli_fetch_assoc($result);

            $_SESSION['id']  =  $row['id'];
            $_SESSION['empid']  =  $row['empid'];
            $_SESSION['uname']  =  $row['uname'];
            $_SESSION['working_type'] = $row['working_type'];
            $_SESSION['salary'] = $row['salary'];
            $_SESSION['workeddays'] = $row['workeddays'];

            header('location:home.php');
        }else{
            header('location:index.php?error=incorrect username or password !');
            exit();
        }

    }

}else{
    header('location:index.php?error=user name and password is requiered !');
    exit();
}

?>