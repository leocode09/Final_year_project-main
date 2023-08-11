<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../asset/css/style.css">
</head>
<body>
    <main>
        <div class="login-card">
            <h1>Admin Login</h1>
            <div class="form">
                <form action="admin-login.php" method="POST">
                    <?php 

                if(isset($_GET['error'])){
                ?>
                <div class="danger" style=" background-color: red; text-align: center.; color: white; font-weight: bold; padding: 20px; border-radius: 6px">
                    <?php
                    echo $_GET['error'];
                    ?>
                </div>

                <?php
            }
            ?>

                    <div class="form-group">
                        <input type="text" name="username" value="<?php if(isset($_COOKIE['name'])){ echo $_COOKIE['name'];} ?>" placeholder=" Username " required>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" value="<?php if(isset($_COOKIE['password'])){ echo $_COOKIE['password'];} ?>" placeholder=" Password" required>
                    </div>
                    <div class="form-group">
                    Select role:<br>
                        <select name="type">                         
                        <option value="Registration"> Registration</option>
                        <option value="Finance"> Finance</option>
                        <option value="Marks"> Marks</option>
                        <option value="Library"> Library</option>
                        <option value="Secretary"> Secretary</option>
                        </select>
                    </div>
                    <div >
                        <input type="checkbox" name="rememberme">
                       <span >Remember me</span>
                    </div>

                    <div class="form-group">
                        <input type="submit" name="login" value="Login" >
                    </div>
                </form>
                <a href="../index.php">Login as student? click here</a>
            </div>
        </div>
    </main>
    

    
</body>
</html>




















