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
    <link rel="stylesheet" href="../../style.css">
    <link rel="stylesheet" href="../../asset/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
<?php
    include('navbar.php')
    ?>

    <section  class="student-main">
        <a href="manage_student.php"><i class="fa-solid fa-eye"></i>Manage student</a>
        <div class="student-form">
            <h1>ADD STUDENT</h1>
            <form action="backend/insert-student.php" method="post" >
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
                    <input type="number" name="rollnumber" placeholder=" Roll Number" required>
                </div>
                <div class="form-group">
                    <input type="text" name="fname" placeholder=" First Name" required>
                </div>
                <div class="form-group">
                    <div class="form-group">
                        <input type="text" name="lname" placeholder=" Last Name" required>
                    </div>
                    <input type="email" name="email" placeholder=" Please Add Your valid email" required>
                </div>
                <div class="form-group">
                    <input type="text" name="phone" placeholder=" Add Valid Telephone number" required>
                </div>
                <div class="form-group">
                    <input type="text" name="password" placeholder=" Password" required>
                </div>
                <div class="form-group">
                    <input id="btn" type="submit" name="add-student">
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