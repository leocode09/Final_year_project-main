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
    <title>Add Financial Problem</title>
    <link rel="stylesheet" href="../../style.css">
    <link rel="stylesheet" href="../../asset/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0-beta.1/css/select2.min.css" rel="stylesheet" />
</head>
<body>
<header class="reg-header">
    <nav class="secretary__nav">
        <ul>
            
            <li class="user-info"><a href="#"><i class="fa-solid fa-address-card"></i>&nbsp;&nbsp;Registraction</a></li>
            <li><a href="registration-home.php">Home</a></li>
            <li><a href="add-student.php">student</a></li>
            <li><a href="add-admin.php">Admin</a></li>
            <li><a href="registration-add-problem.php" class="here"> Student Problem</a></li>
            <li><a href="../logout.php"> Logout&nbsp;&nbsp;<i class="fa-solid fa-arrow-right"></i></a></li>

        </ul>
    </nav>
</header>
<?php
    include('../connect.php');
    $select_students='SELECT rollnumber FROM student';
    $result= mysqli_query($conn, $select_students);
    ?>

    <section  class="student-main">
        <a href="reg_manage_problem.php"><i class="fa-solid fa-eye"></i>Manage Student Problem</a>
        <div class="student-form">
            <h1>ADD STUDENT PROBLEM </h1>
            <form action="backend/add-problem.php" method="post">
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
            ?>

                <div class="student-problem">
                    <div class="form-group">
                        <select name="rollnumber" id="my-select">
                            <?php
                            while($rows=mysqli_fetch_array($result)){
                                ?>
                                <option value="<?php echo $rows['rollnumber'];?>"><?php echo $rows['rollnumber'];?></option>
                                <?php
                            }
                            
                            ?>
                          
                        </select>
                            
                    </div>
                    <div class="form-group">
                        <textarea name="problem" id="" cols="70" rows="10" placeholder=" Write problem here ...."></textarea>
                    </div>
                    <div class="form-group">
                        <input id="btn" type="submit" name='add_problem_reg' value="Add">
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