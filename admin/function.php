  <?php 
    include('../connect.php');
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


          
    $select_students='SELECT rollnumber FROM student';
    $result= mysqli_query($conn, $select_students);

?>


