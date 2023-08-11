<?php 

include('../../connect.php');

if(isset($_POST['add-student'])){
    $rollnumber= $_POST['rollnumber'];
    $fname= $_POST['fname'];
    $lname= $_POST['lname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    
    $password= $_POST['password'];
    
    $check_duplication=mysqli_query($conn,"SELECT * FROM student where rollnumber='".$rollnumber."'");
    
    if(mysqli_num_rows($check_duplication)>0){
      header('location: ../add-student.php?duplication= Student Rollnumber Exist, please try New one!');
    }
    else{
        $insert= "INSERT INTO `student`(`rollnumber`, `fname`, `lname`, `password`,`email`,`phone`) VALUES ('$rollnumber','$fname','$lname','$password','$email','$phone')";
       $inserted= mysqli_query($conn,$insert);
        if($inserted){
            header('location: ../add-student.php?success= student account created successfully');
        }
        else{
            header('location: ../add-admin.php?error= Server Busy!');
        }
    }
    
    

}


?>