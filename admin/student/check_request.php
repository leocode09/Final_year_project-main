<?php 

include('../connect.php');
$rollnumber = $_POST['rollnumber'];
$request = $_POST['problem'];


$check_rollnumber_reg = "SELECT rollnumber FROM `student-reg_file` where rollnumber ='$rollnumber'";
$check_rollnumber_marks = "SELECT rollnumber FROM `student_marks_problem` where rollnumber ='$rollnumber'";
$check_rollnumber_fin = "SELECT rollnumber FROM `student_fin_problem` where rollnumber ='$rollnumber'";
$check_rollnumber_lib = "SELECT rollnumber FROM `student_lib_problem` where rollnumber ='$rollnumber'";

$result_reg= mysqli_query($conn, $check_rollnumber_reg);
$result_marks = mysqli_query($conn, $check_rollnumber_marks);
$result_fin= mysqli_query($conn, $check_rollnumber_fin);
$result_lib = mysqli_query($conn, $check_rollnumber_lib);


// if(mysqli_num_rows($result_reg) == 1 && mysqli_num_rows($result_fin) == 1 && mysqli_num_rows($result_marks) == 1 && mysqli_num_rows($result_lib)==1 ){
//     header('location: request.php?error= You have an issues to fix in Registration , Finance , IT and Library offices. Please feel free to contact them to give Issues description.');
// }  
// elseif(mysqli_num_rows($result_reg) == 1 && mysqli_num_rows($result_fin) == 1 && mysqli_num_rows($result_marks) == 1 ){
//     header('location: request.php?error= You have an issues to fix in Registration , Finance , IT offices. Please feel free to contact them to give Issues description.');

// }  
// elseif(mysqli_num_rows($result_reg) == 1 && mysqli_num_rows($result_marks) == 1 && mysqli_num_rows($result_lib) == 1 ){
//     header('location: request.php?error= You have an issues to fix in Registration, IT and Library offices. Please feel free to contact them to give Issues description.');

// }  
// elseif(mysqli_num_rows($result_fin) == 1 && mysqli_num_rows($result_marks) == 1 && mysqli_num_rows($result_lib) == 1 ){
//     header('location: request.php?error= You have an issues to fix in Finance , IT and Library offices. Please feel free to contact them to give Issues description.');

// }  
// elseif(mysqli_num_rows($result_reg) == 1 && mysqli_num_rows($result_fin) == 1 ){
//     header('location: request.php?error= You have an issues to fix in Registration , Finance offices. Please feel free to contact them to give Issues description.');

// }
// elseif(mysqli_num_rows($result_reg) == 1 && mysqli_num_rows($result_marks) == 1 ){
//     header('location: request.php?error= You have an issues to fix in Registration, IT offices. Please feel free to contact them to give Issues description.');

// }  
// elseif(mysqli_num_rows($result_reg) == 1 && mysqli_num_rows($result_lib) == 1 ){
//     header('location: request.php?error= You have an issues to fix in Registration and Library offices. Please feel free to contact them to give Issues description.');

// } 
// elseif(mysqli_num_rows($result_fin) == 1 && mysqli_num_rows($result_marks) == 1 ){
//     header('location: request.php?error= You have an issues to fix in  Finance and IT offices. Please feel free to contact them to give Issues description.');
//     ;
// } 
// elseif(mysqli_num_rows($result_fin) == 1 && mysqli_num_rows($result_lib) == 1 ){
//     header('location: request.php?error= You have an issues to fix in  Finance and Library offices. Please feel free to contact them to give Issues description.');

// }  
// elseif(mysqli_num_rows($result_marks) == 1 && mysqli_num_rows($result_lib) == 1 ){
//     header('location: request.php?error= You have an issues to fix in IT and Library offices. Please feel free to contact them to give Issues description.');

// }   
// elseif(mysqli_num_rows($result_reg)== 1){
//     header('location: request.php?error= You have an issues to fix in Registration  office. Please feel free to contact them to give Issues description.');

// } 
// elseif(mysqli_num_rows($result_fin)== 1){
//     header('location: request.php?error= You have an issues to fix in  Finance office. Please feel free to contact them to give Issues description.');

// }  
// elseif(mysqli_num_rows($result_lib)== 1){
//     header('location: request.php?error= You have an issues to fix in  Library office. Please feel free to contact them to give Issues description.');

// }  
// elseif(mysqli_num_rows($result_marks)== 1){
//     header('location: request.php?error= You have an issues to fix in  IT office. Please feel free to contact them to give Issues description.');


// } 

if(!(mysqli_num_rows($result_reg) == 1 || mysqli_num_rows($result_fin) == 1 || mysqli_num_rows($result_marks) == 1 || mysqli_num_rows($result_lib) == 1 )){
    $query = "INSERT INTO request VALUES ('$rollnumber','$request')";
    $insert = mysqli_query($conn, $query);
    if($insert == true) {
        $status= 'PENDING';
        $insert_sec_table= "INSERT INTO student_sec_approv VALUES('$rollnumber','$status')";
        $inserted= mysqli_query($conn,$insert_sec_table);

        if($inserted == true){
            $insert_archive = "INSERT INTO requested_docs VALUES('','$rollnumber','$request')";
            $archived = mysqli_query($conn, $insert_archive);
            if($archived == true){
            header('location: request.php?success= Your request have been approved ');
            }
            else{
            header('location: request.php?error= Something went wrong, please Try again later!!!');
            }

        }
        else{
            header('location: request.php?error= Something went wrong, please Try again later!!!');

        }
      
        // add MESSAGE RECEPTION TO SECRETARY ....
    }
    else{
        header('location: request.php?error= Something went wrong, please Try again later!!!');
    }
}
?>