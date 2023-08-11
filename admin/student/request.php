<?php
session_start();
$rollnumber = $_SESSION['rollnumber'];
if (isset($_POST['send_request'])) {
    include('../connect.php');

    $check_rollnumber_reg = "SELECT * FROM `student-reg_file` where rollnumber ='$rollnumber'";
    $check_rollnumber_marks = "SELECT * FROM `student_marks_problem` where rollnumber ='$rollnumber'";
    $check_rollnumber_fin = "SELECT * FROM `student_fin_problem` where rollnumber ='$rollnumber'";
    $check_rollnumber_lib = "SELECT * FROM `student_lib_problem` where rollnumber ='$rollnumber'";
    
    $result_reg= mysqli_query($conn, $check_rollnumber_reg);
    $result_marks = mysqli_query($conn, $check_rollnumber_marks);
    $result_fin= mysqli_query($conn, $check_rollnumber_fin);
    $result_lib = mysqli_query($conn, $check_rollnumber_lib);

    $row_reg = mysqli_fetch_assoc($result_reg);
    $row_marks = mysqli_fetch_assoc($result_marks);
    $row_fin = mysqli_fetch_assoc($result_fin);
    $row_lib = mysqli_fetch_assoc($result_lib);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student page</title>
    <link rel="stylesheet" href="link.css">
    <link rel="stylesheet" href="../../asset/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0-beta.1/css/select2.min.css" rel="stylesheet" />

    <style>
        .danger {
            background: brown;
            width: 80%;
            color:rgb(74, 7, 74);
            padding: 10px 20px;
            color: white;
        }
    
        
    </style>
</head>
<body>
<header class="reg-header">
        <nav>
            <ul>
                <li><a href="student-home.php">Home</a></li>
                <li><a href="request.php">add request</a></li>
                <li><a href="../logout.php">Logout</a></li>
            </ul>
        </nav>
    </header>
    <section  class="student-main">
        <a href="manage_request.php"><i class="fa-solid fa-eye"></i>View Requests</a>
        <div class="student-form">
            <h1>SEND REQUEST </h1>
            <?php if(isset($_POST['send_request'])){ ?>
                    <div class="danger">

                        <?php if(mysqli_num_rows($result_reg) ) {
                            echo "<dl>
                                    <dt>Registration:</dt>
                                    <dd>".$row_reg['problem']."</dd>
                                </dl>";
                            }
                        ?>
                        <?php if(mysqli_num_rows($result_fin) ) {
                            echo "<dl>
                                    <dt>finance:</dt>
                                    <dd>".$row_fin['problem']."</dd>
                                </dl>";
                            }
                        ?>
                        <?php if(mysqli_num_rows($result_marks) ) {
                            echo "<dl>
                                    <dt>marks:</dt>
                                    <dd>".$row_marks['problem']."</dd>
                                </dl>";
                            }
                        ?>
                        <?php if(mysqli_num_rows($result_lib) ) {
                            echo "<dl>
                                    <dt>library:</dt>
                                    <dd>".$row_lib['problem']."</dd>
                                </dl>";
                            }
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

            ?>
            <form method="post">
                <div class="student-problem">
                    <div class="form-group">
                        <input type="number" name="rollnumber" placeholder=" Enter Roll number" required>    
                    </div>
                    <div class="form-group">
                        <textarea name="problem" id="" cols="70" rows="10" placeholder=" Write your request  here ...."></textarea>
                    </div>
                    <div class="form-group">
                        <input id="btn" type="submit" name="send_request" value="Send Request">
                    </div>
                    
                </div>
               
            </form>
        </div>
        
    </section>


      
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0-beta.1/js/select2.min.js"></script>
  <script src="../../asset/js/script.js"></script>

    
</body>
</html>