<?php
    include "../connect.php";
    $id = $_GET['id'];
    if (isset($_GET['id'])) {
        $sql_db1="DELETE from `requested_docs` where rollnumber='$id'";
        $sql_db2="DELETE from `request` where rollnumber='$id'";
        $sql_db3="DELETE from `student_sec_approv` where rollnumber='$id'";
        
        $check_db1=mysqli_query($conn, $sql_db1);
        $check_db2=mysqli_query($conn, $sql_db2);
        $check_db3=mysqli_query($conn, $sql_db3);

        if ($check_db1 && $check_db2 && $check_db3) {
            header('location:manage_request.php');
        }
        # code...
    }
?>