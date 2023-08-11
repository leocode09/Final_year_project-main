<?php
    include "../connect.php";
    $id = $_GET['id'];
    if (isset($_GET['id'])) {
        $sql="DELETE from `student_lib_problem` where rollnumber='$id'";
        $check=mysqli_query($conn, $sql);
        if ($check) {
            header('location:lib_manage_problems.php');
        }
        # code...
    }
?>