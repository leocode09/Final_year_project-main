<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>library manage </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="../datatable/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link rel="stylesheet" href="../../style.css">
    <link rel="stylesheet" href="../../asset/css/style.css">
    <link rel="stylesheet" href="../datatable/style.css">
    <link href="../datatable/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="../datatable/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>

<body id="page-top">
    <header>
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
        <?php
        if(isset($_GET['id'])){
            echo $_GET['id'];
        }

        ?>
    </header>
    <div id="wrapper">

        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <div class="container-fluid">

                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">REQUEST |Request Lists</h6>
                        </div>
                        <div class="card-body">

                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead class=" text-dark">
                                        <tr>
                                            <th>#</th>
                                            <th>ROLL NUMBER</th>
                                            <th>PROBLEM</th>

                                            <th colspan="2">Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php
                                        include('../connect.php');
                                        $query = "SELECT * FROM `student_lib_problem`";
                                        $result = mysqli_query($conn, $query);
                                        $i = 0;
                                        while ($row = mysqli_fetch_array($result)) {
                                            $i = $i + 1;
                                            ?>
                                            <tr>
                                                <td>
                                                    <?php echo $i ?>
                                                </td>
                                                <td>
                                                    <?php echo $row['rollnumber'] ?>
                                                </td>
                                                <td>
                                                    <?php echo $row['problem'] ?>
                                                </td>
                                                <td>
                                            <a href="libUpdateTable.php?id=<?php echo $row['rollnumber']  ?>&problem=<?php echo $row['problem']  ?>" class="badge badge-warning w-100">update</a>
                                            </td>
                                                <td>
                                                <a href="libDeleteTable.php?id=<?php echo $row['rollnumber']  ?>" class="badge badge-danger w-100">Delete</a>
                                                
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