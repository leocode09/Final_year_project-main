<?php
session_start();
include "../connect.php";
if (isset($_SESSION['role'])) {
    $id = $_GET['id'];
    if (isset($_GET['id'])) {
        $sql = "SELECT * FROM `student` WHERE rollnumber='$id'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
    }
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

        <section class="student-main">

            <div class="student-form">
                <h1>UPADATE</h1>
                <form method="post">
                    <?php

                    if (isset($_GET['duplication'])) {
                        ?>
                        <div class="warning">
                            <?php
                            echo $_GET['duplication'];
                            ?>
                        </div>

                        <?php
                    }
                    if (isset($_GET['success'])) {
                        ?>
                        <div class="info">
                            <?php
                            echo $_GET['success'];
                            ?>
                        </div>

                        <?php
                    }
                    if (isset($_GET['error'])) {
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
                        <input type="number" name="rollnumber" placeholder=" Roll Number" value="<?php echo $row['rollnumber'] ?>"
                            required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="fname" placeholder=" First Name" value="<?php echo $row['fname'] ?>" required>
                    </div>
                    <div class="form-group">
                        <div class="form-group">
                            <input type="text" name="lname" placeholder=" Last Name" value="<?php echo $row['lname'] ?>" required>
                        </div>
                        <input type="email" name="email" placeholder=" Please Add Your valid email"
                            value="<?php echo $row['email'] ?>" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="phone" placeholder=" Add Valid Telephone number"
                            value="<?php echo $row['phone'] ?>" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="password" placeholder=" Password" value="<?php echo $row['password'] ?>" required>
                    </div>
                    <div class="form-group">
                        <input id="btn" type="submit" name="update" value="update">
                    </div>
                </form>
            </div>

        </section>


    </body>

    </html>
    <?php

    if (isset($_POST['update'])) {
        $rollnumber = $_POST['rollnumber'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $password = $_POST['password'];
        $select = mysqli_query($conn, "UPDATE student set rollnumber='$rollnumber',fname='$fname',lname='$lname',email='$email',phone='$phone',password='$password' where rollnumber='$rollnumber'");
        if ($select) {
            header('location:manage_student.php');
        } else {
            echo "<script>alert('Failed try again!!')</script>";
        }
    }
?>
<?php
} else {
    ?>
    <script>alert('Please, You are not allowed to Access the pages');
        window.location.href = "../login.php";
    </script>

    <?php
}


?>