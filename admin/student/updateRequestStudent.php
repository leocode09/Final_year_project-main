<?php
$rollnumber = $_GET['id'];
$request = $_GET['request'];


if (isset($_POST['update_request'])) {
    include('../connect.php');
    $request = $_POST['problem'];
    $newproblem = $_POST['problem'];

    $sql = "UPDATE `requested_docs` set requested='$newproblem' where rollnumber='$rollnumber'";
    $check = mysqli_query($conn, $sql);
    if ($check) {
        header('location:manage_request.php');
    }

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
            <h1>STUDENT REQUEST FORM </h1>
            <form method="post">
                        <?php echo $rollnumber; ?>
                <div class="student-problem">
                    <div class="form-group">
                        <select name="problem">
                            <option value="null">-- select your request here --</option>
                            <option value="degree">Degree</option>
                            <option value="transcript">Transcript</option>
                            <option value="to-who">To Who</option>
                            <option value="advanced-diploma">Advanced Diploma</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input id="btn" type="submit" name="update_request" value="Update Request">
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