<?php
    include "../connect.php";
    $id = $_GET['id'];
    if (isset($_GET['id'])) {
        $sql="DELETE from `student` where rollnumber='$id'";
        $check=mysqli_query($conn, $sql);
        if ($check) {
            header('location:manage_student.php');
        }
    }
?>