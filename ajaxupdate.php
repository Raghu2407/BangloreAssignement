<?php
$conn=mysqli_connect('localhost', 'root', '' , 'bangloreassignment');
if($conn){
    //  echo "success";
}
$id =$_POST['id'];
$username = $_POST['username'];
$useremail = $_POST['useremail'];
$userphone = $_POST['userphone'];
$userdob = $_POST['userdob'];
$gender = $_POST['gender'];



// echo $i++;
$query = "UPDATE `user_info` SET `u_name`='$username',`u_email`='$useremail',`u_phone`='$userphone',`u_dob`='$userdob',`u_sex`='$gender' WHERE  u_id = $id";
$run_query = $conn->query($query);
if($run_query){
    echo "Successfully Updated";
}