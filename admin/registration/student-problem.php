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
    <title>Add student problem</title>
    <link rel="stylesheet" href="../../style.css">
    <link rel="stylesheet" href="../../asset/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0-beta.1/css/select2.min.css" rel="stylesheet" />
</head>
<body>
<?php
    include('navbar.php')
    ?>

    <section  class="student-main">
        <a href="#"><i class="fa-solid fa-eye"></i>Manage Student Problem</a>
        <div class="student-form">
            <h1>ADD STUDENT PROBLEM </h1>
            <form action="" method="post">
                <div class="student-problem">
                    <div class="form-group">
                        <select name="rollnumber" id="my-select">
                            <option value="0" selected disabled> Select Roll number</option>
                        </select>
                            
                    </div>
                    <div class="form-group">
                        <textarea name="problem" id="" cols="70" rows="10" placeholder=" Write problem here ...."></textarea>
                    </div>
                    <div class="form-group">
                        <input id="btn" type="submit" value="Add">
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