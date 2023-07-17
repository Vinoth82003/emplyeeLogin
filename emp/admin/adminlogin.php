<?php
session_start();
include 'conn.php';

if (isset($_POST['login'])) {
    
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

       
        
        $sql = "SELECT * FROM `admin` WHERE `uname` = '$uname' AND `password` = '$password';";
        $result = mysqli_query($conn,$sql);

        if ($result && mysqli_num_rows($result) === 1) {
            
            $row = mysqli_fetch_assoc($result);

            $_SESSION['id']  =  $row['id'];
            $_SESSION['admin']  =  $row['name'];

            header('location:admin.php');
        }else{
            header('location:index.php?error=incorrect username or password !');
            exit();
        }

    }

}else if (isset($_POST['delete'])) {

    $empid = $_POST['delete'];
    
    $sql = "DELETE FROM `employee` WHERE `empid` = '$empid' ;";
    $result = mysqli_query($conn,$sql);

    if ($result === 1) {
        header('location:admin.phpsuccess=deleted succsessfully !');
    }else{
        header('location:admin.php?error=something went wrong !');
    }

}elseif (isset($_POST['edit'])) {
    $empid =  $_POST['empid'];
    
    $sql = "SELECT * FROM `employee` WHERE `empid` = '$empid' ;";
    $result = mysqli_query($conn,$sql);

    if (mysqli_num_rows($result) < 1) {
        header('location:admin.php?error=no such empid in table !');
    }else{
        $row = mysqli_fetch_assoc($result);
        $uname = $_POST['uname'];
        $working_type = $_POST['working_type'];
        $workeddays =  $_POST['workeddays'];
        $salary =  $_POST['salary'];
        // $password = $row['password'];
        if (empty($uname) ) {
            header('location:admin.php?error=empty request !');
            exit();
        }elseif (empty($working_type)) {
            header('location:admin.php?error=empty working type  !');
            exit();
        }elseif (empty($workeddays)) {
            header('location:admin.php?error= empty worked days  !');
            exit();
        }elseif (empty($salary)) {
            header('location:admin.php?error=empty salary !');
            exit();
        }else  {
            $sql = " UPDATE `employee` SET `empid`='$empid',`uname`='$uname',`working_type`='$working_type',`salary`='$salary',`workeddays`='$workeddays' WHERE `empid` = '$empid' ";
            $result = mysqli_query($conn,$sql);

            if ($result === 1) {
                header('location:admin.php?error=somthing went wrong !');
            }else{
                header('location:admin.php?success=updated successfully ');
            }
        }
}

}elseif (isset($_POST['add'])) {
        $empid = $_POST['empid'];
        $uname = $_POST['uname'];
        $working_type = $_POST['working_type'];
        $workeddays =  $_POST['workeddays'];
        $salary =  $_POST['salary'];
        $password = $_POST['password'];
        if (empty($empid)) {
            header('location:admin.php?error=empty employee id !');
            exit();
        }elseif (empty($uname) ) {
            header('location:admin.php?error=empty request !');
            exit();
        }elseif (empty($working_type)) {
            header('location:admin.php?error=empty working type  !');
            exit();
        }elseif (empty($workeddays)) {
            header('location:admin.php?error= empty worked days  !');
            exit();
        }elseif (empty($salary)) {
            header('location:admin.php?error=empty salary !');
            exit();
        }elseif (empty($password)) {
            header('location:admin.php?error=empty password !');
            exit();
        }else  {
            $sql = " INSERT INTO `employee`(`id`, `empid`, `uname`, `working_type`, `salary`, `workeddays`, `password`) 
            VALUES (null,'$empid','$uname','$working_type','$salary','$workeddays','$password') ";
            $result = mysqli_query($conn,$sql);

            if ($result === 1) {
                header('location:admin.php?error=somthing went wrong !');
            }else{
                header('location:admin.php?success=Added successfully !');
            }
        }
} else{
    header('location:index.php?error=something went wong try again !');
    exit();
}

// $sql = "INSERT INTO `employee` (`id`, `empid`, `uname`, `working_type`, `salary`, `workeddays`, `password`) VALUES (NULL, \'1111\', \'vinoth\', \'Monthly\', \'25000\', \'28\', \'vinoth\');";

?>