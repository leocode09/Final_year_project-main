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
        <h1>Autometed documents</h1>
        <p> 
            hope this message finds you well. I wanted
            to take a moment to introduce you to the 
            concept of automated document generation,
            a powerful tool that can significantly
            enhance efficiency
        </p>
        <div class="forms">
            <a class="s" href="login.php">Student</a>
            <a class="a" href="admin/login.php">Administrator</a>
        </div>

    </main>
</body>

</html>