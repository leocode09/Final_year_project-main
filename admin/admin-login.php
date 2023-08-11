<?php 
include('connect.php');
session_start();

if(isset($_POST['login'])){
 
    $username= $_POST['username'];
    $password= $_POST['password'];
    $role = $_POST['type'];

    $sql="SELECT * FROM users where username='$username' and `password`='$password' and `role`='$role'";
    $result=mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0)
    {
        while($rows=mysqli_fetch_assoc($result)){
            if($rows['role']=$role=='Finance'){
                $_SESSION['role']=$role; 
                if(isset($_POST['username'])){
                    setcookie('name',$username,time()+3600,'/');
                    setcookie('password',$password,time()+3600,'/');
                }

                header('location: finance/finance-home.php');
                
            }

            if($rows['role']=$role=='Marks'){
                $_SESSION['role']=$role; 
                if(isset($_POST['username'])){
                    setcookie('name',$username,time()+3600,'/');
                    setcookie('password',$password,time()+3600,'/');
                }
                header('location: Marks/marks-home.php');
            }
            if($rows['role']=$role=='Registration'){
                $_SESSION['role']=$role; 
                if(isset($_POST['username'])){
                    setcookie('name',$username,time()+3600,'/');
                    setcookie('password',$password,time()+3600,'/');
                }
               
                header('location: registration/registration-home.php');
            }
            if($rows['role']=$role=='Secretary'){
                $_SESSION['role']=$role; 
                if(isset($_POST['username'])){
                    setcookie('name',$username,time()+3600,'/');
                    setcookie('password',$password,time()+3600,'/');
                }
                header('location: secretary/secretary-home.php');
            }
            if($rows['role']=$role=='Library'){
                $_SESSION['role']=$role; 
                if(isset($_POST['username'])){
                    setcookie('name',$username,time()+3600,'/');
                    setcookie('password',$password,time()+3600,'/');
                }
                header('location: library/library-home.php');
            }  
           
        
    }

}
else{
    header('location: login.php? error= Incorrect Username or Password');
}
    }


?>