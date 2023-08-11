<?php

include('../../connect.php');

if(isset($_POST['add_problem_reg'])){
    $rollnumber=$_POST['rollnumber'];
    $problem=$_POST['problem'];
    $sql="SELECT * from `student-reg_file` where rollnumber='$rollnumber'";
    $check=mysqli_query($conn, $sql);

    if(mysqli_num_rows($check)>0){
       header('location: ../registration-add-problem.php?duplication=Student is already have issues to fix, So update the problems');
    }
    else{
    $insert=mysqli_query($conn, "INSERT INTO `student-reg_file`(`rollnumber`, `problem`) VALUES ('".$rollnumber."','$problem')");
    if($insert){
        header('location: ../registration-add-problem.php?success=Student Problem has been uploaded');
    }
    }
}

