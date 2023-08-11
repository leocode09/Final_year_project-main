<?php
include('admin/connect.php');
session_start();

if(isset($_POST['login-student'])){
 
    $rollnumber= $_POST['rollnumber'];
    $password= $_POST['password'];

    $sql="SELECT * FROM student where rollnumber='$rollnumber' and password='$password'";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
        header('location: admin/student/student-home.php');
        $_SESSION['rollnumber']=$rollnumber;
    }

    else{
        header('location: index.php?error= Roll number and Password does not match');
    }
}