<?php
session_start();
if (isset($_POST['login-student'])) {
    $_SESSION['rollnumber'] = $_POST['rollnumber'];
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./asset/css/style.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main class="board">
        <h1>Online Intelligent Clearance Approval System</h1>
        <div>
            <p>Welcome to Kigali Independent University,</p><br>
            <p> ULK's an online intelligent clearance approval system
                please select an account depending on your user-role eirther as a student or an administration</p>
        </div>
        
        <div class="forms">
            <a class="s" href="login.php">Student</a>
            <a class="a" href="admin/login.php">Administrator</a>
        </div>

    </main>
</body>

</html>