<?php
    include "../connect.php";
    $id = $_GET['id'];
    if (isset($_GET['id'])) {
        $sql="DELETE from `student_fin_problem` where rollnumber='$id'";
        $check=mysqli_query($conn, $sql);
        if ($check) {
            header('location:fin_manage_problems.php');
        }
        # code...
    }
?>