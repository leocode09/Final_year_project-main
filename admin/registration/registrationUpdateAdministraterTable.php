<?php 
session_start();
include "../connect.php";
if(isset($_SESSION['role'])){
    $id = $_GET['id'];
    if (isset($_GET['id'])) {
        $sql = "SELECT * FROM `users` WHERE role='$id'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
    }

    if (isset($_POST['edit-admin'])) {   
        $username = $_POST['username'];
        $password = $_POST['password'];
        $sql = "UPDATE `users` set username='$username', password='$password' where role='$id'";
        $check = mysqli_query($conn, $sql);
        if ($check) {
            header('location:manage_administrater.php');
        }
    }
    
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
        <a href="manage_administrater.php"><i class="fa-solid fa-eye"></i>Go back</a>
        <div class="student-form">
            <h1>CHANGE ADMINISTRATOR</h1>
            <form method="POST">

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
                    <input type="text" name="username" placeholder=" Username" required value=<?php echo $row['username'] ?>>
                </div>
                <div class="form-group">
                    <input type="text" name="password" placeholder=" Password" required value=<?php echo $row['password'] ?>>
                </div>
                <div class="form-group">
                    <select name="role">
                        <option value=<?php echo $row['role'] ?> selected disabled><?php echo $row['role'] ?></option>
                    </select>
                </div>
                <div class="form-group">
                    <input id="btn" type="submit" name="edit-admin" value="Done">
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