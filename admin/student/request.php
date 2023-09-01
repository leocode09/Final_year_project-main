<?php
session_start();
$rollnumber = $_SESSION['rollnumber'];


if (isset($_POST['send_request'])) {
    include('../connect.php');
    $request = $_POST['problem'];

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
    <link rel="stylesheet" href="../../style.css">
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
    <nav class="secretary__nav">
        <ul>
            <li class="user-info"><a href="#"><i class="fa fa-graduation-cap"
                        aria-hidden="true"></i>&nbsp;&nbsp;<?php echo $rollnumber ?></a></li>
            <li><a href="student-home.php">Home</a></li>
            <li><a href="request.php" class="here">add request</a></li>
            <li><a href="../logout.php">Logout&nbsp;&nbsp;<i class="fa-solid fa-arrow-right"></i></a></li>
        </ul>
    </nav>
    </header>
    <section  class="student-main">
        <a href="manage_request.php"><i class="fa-solid fa-eye"></i>View Requests</a>
        <div class="student-form">
            <h1>STUDENT REQUEST FORM </h1>
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

                        <?php
                            if(!(mysqli_num_rows($result_reg) == 1 || mysqli_num_rows($result_fin) == 1 || mysqli_num_rows($result_marks) == 1 || mysqli_num_rows($result_lib) == 1 )){
                                $query = "INSERT INTO request VALUES ('','$rollnumber','$request','')";
                                try {
                                    $insert = mysqli_query($conn, $query);
                                } catch (Exception $e) {
                                    header('location: request.php?error=me');
                                }
                                if($insert == true) {
                                    $status= 'PENDING';
                                    $insert_sec_table= "INSERT INTO student_sec_approv VALUES ('','$rollnumber','$status','')";
                                    $inserted= mysqli_query($conn,$insert_sec_table);
                            
                                    if($inserted == true){
                                        $insert_archive = "INSERT INTO requested_docs VALUES ('','$rollnumber','$request','')";
                                        $archived = mysqli_query($conn, $insert_archive);
                                        if($archived == true){
                                        header('location: request.php?success= Your request have been approved ');
                                        }
                                        else{
                                        header('location: request.php?error= Something went wrong, please Try again later!!!');
                                        }
                            
                                    }
                                    else{
                                        header('location: request.php?error= Something went wrong, please Try again later!!!');
                            
                                    }
                                  
                                    // add MESSAGE RECEPTION TO SECRETARY ....
                                }
                                else{
                                    header('location: request.php?error= Something went wrong, please Try again later!!!');
                                }
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
            <form method="post"  class="student-problem">
                <p><?php echo $rollnumber; ?></p>
                <div class="form-group">
                <select name="problem">
                    <option value="null">-- select your request here --</option>
                    <option value="degree">Degree</option>
                    <option value="transcript">Transcript</option>
                    <option value="to-who">degree testimonial</option>
                    <option value="advanced-diploma">Advanced Diploma</option>
                </select>
                </div>
                <div class="form-group">
                    <input id="btn" type="submit" name="send_request" value="Send Request">
                </div>
            </form>
        </div>
        
    </section>


      
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0-beta.1/js/select2.min.js"></script>
  <script src="../../asset/js/script.js"></script>

    
</body>
</html>