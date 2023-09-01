<?php 
include('../connect.php');
session_start();

if(isset($_SESSION['rollnumber'])){
        $rollnumber = $_SESSION['rollnumber'];
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Home</title>
    <link rel="stylesheet" href="../../style.css">
    <link rel="stylesheet" href="../../asset/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <header class="reg-header">
    <nav class="secretary__nav">
        <ul>
            <li class="user-info"><a href="#"><i class="fa fa-graduation-cap"
                        aria-hidden="true"></i>&nbsp;&nbsp;<?php echo $rollnumber ?></a></li>
            <li><a href="student-home.php" class="here" style="text-decoration: underline;">Home</a></li>
            <li><a href="request.php">add request</a></li>
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
                    
                    <h1>REQUEST</h1>
                    <?php
                    $rollnumber = $_SESSION['rollnumber'];
                    $sql= "SELECT count(rollnumber) as rollnumber FROM requested_docs where rollnumber = $rollnumber";
                    $selected = mysqli_query($conn, $sql);
                    while($row= mysqli_fetch_array($selected)){
                        echo $row['rollnumber'];
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
                            window.location.href="../../index.php";
                        </script>
                    
                        <?php
                    }
                    ?>