<?php

include "../connect.php";
$id = $_GET['id'];
$problem = $_GET['problem'];

if (isset($_POST["library_edit_problem"])) {
    $newproblem = $_POST['problem'];
    $sql = "UPDATE `student_lib_problem` set problem='$newproblem' where rollnumber='$id'";
    $check = mysqli_query($conn, $sql);
    if ($check) {
        header('location:lib_manage_problems.php');
    }
}
?>

<?php
session_start();
if (isset($_SESSION['role'])) {
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Edit Financial Problem</title>
        <link rel="stylesheet" href="../../style.css">
        <link rel="stylesheet" href="../../asset/css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0-beta.1/css/select2.min.css" rel="stylesheet" />
    </head>

    <body>
 <header class="reg-header">
    <nav class="secretary__nav">
        <ul>
            <li class="user-info"><a href="#"><i class="fa-solid fa-book"></i>&nbsp;&nbsp;Library</a></li>
            <li><a href="library-home.php">Home</a></li>
            <li><a href="library-add-problem.php" class="here">add problem</a></li>
            <li><a href="../logout.php">Logout&nbsp;&nbsp;<i class="fa-solid fa-arrow-right"></i></a></li>

        </ul>
    </nav>
</header>
        <section class="student-main">
            <a href="lib_manage_problems.php"><i class="fa-solid fa-eye"></i>Go back</a>
            <div class="student-form">
                <h1>EDIT STUDENT PROBLEM </h1>
                <!-- <form action="./fin_manage_problems.php" method="post"> -->
                <form method="post">

                    <?php include('../function.php') ?>
                    <div class="student-problem">
                        <div class="form-group">
                            <select name="rollnumber" id="my-select">
                                <option value=<?php echo $id ?> selected disabled><?php echo $id ?></option>
                            </select>

                        </div>
                        <div class="form-group">
                            <textarea name="problem" id="" cols="70" rows="10" placeholder=" Write problem here ...."
                                value=<?php echo $problem ?>><?php echo $problem ?></textarea>
                        </div>
                        <div class="form-group">
                            <input id="btn" type="submit" name="library_edit_problem" value="Done">
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
} else {
    ?>
    <script>alert('Please, You are not allowed to Access the pages');
        window.location.href = "../../login.php";
    </script>

    <?php
}


?>