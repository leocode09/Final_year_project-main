
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<header class="reg-header">
    <nav class="secretary__nav">
        <?php
        session_start();
        if(isset($_SESSION['rollnumber'])){
            $rollnumber = $_SESSION['rollnumber'];
        }
        ?>
        <ul>
            <li class="user-info"><a href="#"><i class="fa fa-graduation-cap"
                        aria-hidden="true"></i>&nbsp;&nbsp;<?php echo $rollnumber ?></a></li>
            <li><a href="student-home.php">Home</a></li>
            <li><a href="request.php">add request</a></li>
            <li><a href="../logout.php">Logout&nbsp;&nbsp;<i class="fa-solid fa-arrow-right"></i></a></li>
        </ul>
    </nav>
</header>