<?php 

include('../../connect.php');

if(isset($_POST['add-admin'])){
    $username= $_POST['username'];
    $password= $_POST['password'];
    $role= $_POST['role'];
    
    $check_duplication=mysqli_query($conn,"SELECT * FROM users where role='$role'");
    
    if(mysqli_num_rows($check_duplication)>0){
      header('location: ../add-admin.php?duplication= Admin Role Exist, please try again!');
    }
    else{
        $insert= "INSERT INTO `users`(`role`, `username`, `password`) VALUES ('$role','$username','$password')";
        $inserted=mysqli_query($conn,$insert);
        if($inserted){
            header('location: ../add-admin.php?success= User created successfully');
        }
        else{
            header('location: ../add-admin.php?error= Server Busy!');
        }
    }
    
    

}


?>