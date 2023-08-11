<?php
    include "../connect.php";
    $id = $_GET['id'];
    if (isset($_GET['id'])) {
        $sql="DELETE from `student_marks_problem` where rollnumber='$id'";
        $check=mysqli_query($conn, $sql);
        if ($check) {
            header('location:marks_manage_problems.php');
        }
        # code...
    }
?>