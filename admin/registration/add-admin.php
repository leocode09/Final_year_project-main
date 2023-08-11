<?php 
session_start();
if(isset($_SESSION['role'])){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add student</title>
    <link rel="stylesheet" href="../../asset/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <?php
    include('navbar.php')
    ?>

    <section  class="student-main">
        <a href="manage_administrater.php"><i class="fa-solid fa-eye"></i>Manage Administrator</a>
        <div class="student-form">
            <h1>ADD ADMINISTRATOR</h1>
            <form action="backend/insert-admin-user.php" method="POST">

            <?php 
            
            if(isset($_GET['duplication'])){
                ?>
                <div class="warning">
                    <?php
                    echo $_GET['duplication'];
                    ?>
                </div>

                <?php
            }
            if(isset($_GET['success'])){
                ?>
                <div class="info">
                    <?php
                    echo $_GET['success'];
                    ?>
                </div>

                <?php
            }
            if(isset($_GET['error'])){
                ?>
                <div class="danger">
                    <?php
                    echo $_GET['error'];
                    ?>
                </div>

                <?php
            }

            ?>
                <div class="form-group">
                    <input type="text" name="username" placeholder=" Username" required>
                </div>
                <div class="form-group">
                    <input type="text" name="password" placeholder=" Password" required>
                </div>
                <div class="form-group">
                    <select name="role">
                        <option value="0" selected disabled> Select Role</option>                           
                        <option value="Registration"> Registration</option>
                        <option value="Finance"> Finance</option>
                        <option value="Marks"> Marks</option>
                        <option value="Library"> Libray</option>
                        <option value="Secretary"> Secretary</option>
                    </select>
                </div>
                <div class="form-group">
                    <input id="btn" type="submit" name="add-admin" value="Add admin">
                </div>
                
            </form>
        </div>
        
    </section>

    
</body>
</html>
<?php 
}
else{
    ?>
    <script>alert('Please, You are not allowed to Access the pages');
        window.location.href="../login.php";
    </script>

    <?php
}


?>