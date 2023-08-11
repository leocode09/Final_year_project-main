<?php

include('../../connect.php');

if(isset($_POST['library_add_problem'])){
    $rollnumber=$_POST['rollnumber'];
    $problem=$_POST['problem'];
    $sql="SELECT * from `student_lib_problem` where rollnumber='$rollnumber'";
    $check=mysqli_query($conn, $sql);

    if(mysqli_num_rows($check)>0){
       header('location: ../library-add-problem.php?duplication=Student is already have issues to fix, So update the problems');
    }
    else{
    $insert=mysqli_query($conn, "INSERT INTO `student_lib_problem`(`rollnumber`, `problem`) VALUES ('".$rollnumber."','$problem')");
    if($insert){
        header('location: ../library-add-problem.php?success=Student Problem has been uploaded');
    }
    }
}