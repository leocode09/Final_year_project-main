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
    <main>
        <div class="login-card">
            <h1>Student Login</h1>
            <div class="form">
                <form action="student-login.php" method="POST">
                    <?php
                    if (isset($_GET['error'])) {
                        ?>
                        <div class="danger"
                            style=" background-color: red; text-align: center.; color: white; font-weight: bold; padding: 20px; border-radius: 6px">
                            <?php
                            echo $_GET['error'];
                            ?>
                        </div>

                        <?php
                    }
                    ?>
                    <div class="form-group">
                        <input type="number" name="rollnumber" placeholder=" Roll Number" required>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" placeholder=" Password" required>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="login-student" value="Login">
                    </div>
                    <div>
                        <input type="checkbox" name="rememberme">
                        <span>Remember me</span>
                    </div>

                </form>
                <a href="admin/login.php">Login as Admin? click here</a>
            </div>
        </div>
    </main>



</body>

</html>