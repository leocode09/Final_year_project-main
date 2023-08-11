<?php 
session_start();
include('../connect.php');
if(isset($_SESSION['role'])){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Home</title>
    <link rel="stylesheet" href="../../asset/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
<?php
    include('navbar.php')
    ?>

    <main class="reg-main">
        <div class="container">
            <div class="reg-card">
                <div class="icon">
                    <i class="fa-sharp fa-solid fa-graduation-cap"></i>
                </div>
                <div class="desc">
                    <h1>STUDENT</h1>

                    <?php 
                    $sql=" SELECT count(rollnumber) as sum FROM student";
                    $display = mysqli_query($conn, $sql);
                    while($row= mysqli_fetch_assoc($display)){ 
                        ?>
                    <span><?php  echo $row['sum']; ?></span>
                    <?php 
                    }
                    ?>
                   
                </div>
            </div>
            <div class="reg-card">
                <div class="icon">
                    <i class="fa-solid fa-screwdriver-wrench"></i>
                </div>
                <div class="desc">
                    <h1>ADMIN</h1>
                    <?php 
                    $sql=" SELECT count(id) as sum FROM users";
                    $display = mysqli_query($conn, $sql);
                    while($row= mysqli_fetch_assoc($display)){ 
                        ?>
                    <span><?php  echo $row['sum']; ?></span>
                    <?php 
                    }
                    ?>
                </div>
            </div>
            <div class="reg-card">
                <div class="icon">
                    <i class="fa-sharp fa-solid fa-circle-exclamation"></i>
                </div>
                <div class="desc">
                    <h1>PROBLEMS</h1>
                    <?php 
                    $sql=" SELECT count(rollnumber) as sum FROM `student-reg_file`";
                    $display = mysqli_query($conn, $sql);
                    while($row= mysqli_fetch_assoc($display)){ 
                        ?>
                    <span><?php  echo $row['sum']; ?></span>
                    <?php 
                    }
                    ?>
                </div>
            </div>
        </div>

    </main>

    
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