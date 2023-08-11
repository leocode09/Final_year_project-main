<?php
    include "../connect.php";
    $id = $_GET['id'];
    if (isset($_GET['id'])) {
        $sql="DELETE from `student-reg_file` where rollnumber='$id'";
        $check=mysqli_query($conn, $sql);
        if ($check) {
            header('location:reg_manage_problem.php');
        }
        # code...
    }
?>