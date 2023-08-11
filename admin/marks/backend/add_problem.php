<?php

include('../../connect.php');

if(isset($_POST['add_marks_problem'])){
    $rollnumber=$_POST['rollnumber'];
    $problem=$_POST['problem'];
    $sql="SELECT * from `student_marks_problem` where rollnumber='$rollnumber'";
    $check=mysqli_query($conn, $sql);

    if(mysqli_num_rows($check)>0){
       header('location: ../marks-add-problem.php?duplication=Student is already have issues to fix, So update the problems');
    }
    else{
    $insert=mysqli_query($conn, "INSERT INTO `student_marks_problem`(`rollnumber`, `problem`) VALUES ('".$rollnumber."','$problem')");
    if($insert){
        header('location: ../marks-add-problem.php?success=Student Problem has been uploaded');
    }
    }
}

