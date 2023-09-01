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
    <title>secretary Home</title>
    <link rel="stylesheet" href="../../style.css">
    <link rel="stylesheet" href="../../asset/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
<header class="reg-header">
    <nav class="secretary__nav">
        <ul>
            <li class="user-info"><a href="#"><i class="fa-solid fa-compass-drafting"></i>&nbsp;&nbsp;Secretary</a></li>
            <li><a href="secretary-home.php" class="here">Home</a></li>
            <li><a href="secretary_view_request.php"> Requested Docs </a></li>
            <li><a href="secretary_view_approved.php"> Approved docs</a></li>
            <li><a href="../logout.php">Logout&nbsp;&nbsp;<i class="fa-solid fa-arrow-right"></i></a></li>

        </ul>
    </nav>
</header>
    <main class="reg-main">
        <div class="container">
            <div class="reg-card">
                <div class="icon">
                    <i class="fa-sharp fa-solid fa-circle-exclamation"></i>
                </div>
                <div class="desc">
                    <h1>REQUESTED</h1>
                    <?php 
                    $sql=" SELECT count(rollnumber) as sum FROM student_sec_approv where status = 'PENDING'";
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
                    <h1>APPROVED</h1>
                    <?php 
                    $sql=" SELECT count(rollnumber) as sum FROM student_sec_approv where status = 'APPROVED'";
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