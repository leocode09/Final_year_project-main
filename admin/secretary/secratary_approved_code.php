<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Requests </title>
    <link href="../datatable/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link rel="stylesheet" href="../datatable/style.css">
    <link href="../datatable/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="../datatable/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>

<body id="page-top">
    <header>
        <?php
        include('navbar.php');
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
                            <div id="form_approv">
                                <form action="send_message.php" method='POST'>
                                    <div class="form-group col-md-6 mx-auto">
                                        <input class="form-control" type="text" placeholder=" Your phone number" name="phone">
                                    </div>
                                    <div class="form-group col-md-6 mx-auto">
                                        <textarea name="message" class="form-control"></textarea>
                                    </div>
                                   
                                    <div class="form-group col-md-4 mx-auto">
                                        <button type="submit" class="btn btn-lg bg-primary text-white">Approve </button>
                                    </div>
                                    
                                </form>
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