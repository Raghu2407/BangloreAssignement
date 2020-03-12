<?php
$conn=mysqli_connect('localhost', 'root', '' , 'bangloreassignment');
if($conn){
    //  echo "success";
}
$username = $_POST['username'];
$useremail = $_POST['useremail'];
$userphone = $_POST['userphone'];
$userdob = $_POST['userdob'];
$gender = $_POST['gender'];



// echo $i++;
$query = "INSERT INTO `user_info`( `u_name`, `u_email`, `u_phone`, `u_dob`, `u_sex`) VALUES ('$username','$useremail','$userphone','$userdob','$gender')";
$run_query = $conn->query($query);
if($run_query){
    echo "Successfully inserted";
}