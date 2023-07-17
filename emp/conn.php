<?php 

// $localhost = 'localhost';
// $username = 'root';
// $password = '';

// $dbName = 'empdetails';

// $conn = mysqli_connect($localhost,$username,$password,$dbName);
$conn = mysqli_connect('localhost','root','','empdetails');

if (!$conn) {
    die('connection failed '.mysqli_error());
}
?>