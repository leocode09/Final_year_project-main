<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>manage student </title>
    <link href="../datatable/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link rel="stylesheet" href="../../style.css">
    <link rel="stylesheet" href="../datatable/style.css">
    <link rel="stylesheet" href="../../asset/css/style.css">
    <link href="../datatable/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="../datatable/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body id="page-top">
    <header>
    <header class="reg-header">
        <nav class="secretary__nav">
            <ul>
                
                <li class="user-info"><a href="#"><i class="fa-solid fa-address-card"></i>&nbsp;&nbsp;Registraction</a></li>
                <li><a href="registration-home.php">Home</a></li>
                <li><a href="add-student.php" class="here">student</a></li>
                <li><a href="add-admin.php">Admin</a></li>
                <li><a href="registration-add-problem.php"> Student Problem</a></li>
                <li><a href="../logout.php"> Logout&nbsp;&nbsp;<i class="fa-solid fa-arrow-right"></i></a></li>

            </ul>
        </nav>
    </header>
    </header>
    <div id="wrapper">

        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
               <div class="container-fluid">

                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">MANAGE |MANAGE Lists</h6>
                        </div>
                        <div class="card-body">

                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead class=" text-dark">
                                        <tr>
                                            <th>#</th>
                                            <th>ROLL NUMBER</th>
                                            <th>FIRST NAME</th>
                                            <th>LAST NAME</th>
                                            <th>PASSWORD</th>
                                            <th>EMAIL</th>
                                            <th>PHONE NUMBER</th>
                                            <th>DATE</th>
                                            <th colspan='2'>ACTION</th>
                                        </tr>
                                    </thead>
                        
                                    <tbody>
                                        <?php 
                                        include('../connect.php');
                                        $query = "Select * FROM student";
                                        $result = mysqli_query($conn, $query);
                                        $i = 0;
                                        while($row= mysqli_fetch_array($result)){
                                           $i= $i+1;
                                            ?>    
                                            <tr>
                                            <td><?php echo $i?></td>
                                            <td><?php echo $row['rollnumber'] ?></td>
                                            <td><?php echo $row['fname'] ?></td>
                                            <td><?php echo $row['lname'] ?></td>
                                            <td><?php echo $row['password'] ?></td>
                                            <td><?php echo $row['email'] ?></td>
                                            <td><?php echo $row['phone'] ?></td>
                                            <td><?php echo $row['Date'] ?></td>
                                            <td>
                                            <a href="registrationUpdateStudentTable.php?id=<?php echo $row['rollnumber']  ?>" class="badge badge-warning w-100">update</a>
                                            </td>
                                            <td>
                                                <a href="registrationDeleteStudentTable.php?id=<?php echo $row['rollnumber']  ?>" class="badge badge-danger w-100">Delete</a>
                                                
                                            </td>
                                           

                                        </tr>
                                        <?php        
                                        }

                                        ?>
                                        

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
          

        </div>

       
     
    </div>
    
    <script src="approve.js"></script>
   
    <!-- Bootstrap core JavaScript-->
    <script src="../datatable/vendor/jquery/jquery.min.js"></script>
    <script src="../datatable/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../datatable/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../datatable/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../datatable/vendor/datatables/jquery.dataTables.min.js"></script>
    <!-- Page level custom scripts -->
    <script src="../datatable/js/demo/datatables-demo.js"></script>

</body>

</html>