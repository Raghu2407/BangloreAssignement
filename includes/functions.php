<?php
ob_start();
session_start();
date_default_timezone_set("Asia/Kolkata");
include('db.php');
global $conn;
$task =  new task;
class task{

    public function getdata(){
        global $conn;
    
        $sql = "SELECT `u_id`, `u_name`, `u_email`, `u_phone`, `u_dob`, `u_sex`, `u_created_date`, `u_modified_date` FROM `user_info` WHERE 1";
        $query = $conn->query($sql);  
         $data = '  
           <table class="table responsive-table ">  
                <tr>    
                     <th width="35%">Username</th>  
                     <th width="35%">Email</th>  
                     <th width="10%">Phone</th>  
                     <th width="10%">DOB</th>  
                     <th>Gender</th>
                     <th>Action</th>
                </tr>  
           '; 
       //echo $sql;
       $query = $conn->query($sql);
       if($query->num_rows > 0){
           while($row = $query->fetch_assoc())
           {
               
               $username = $row['u_name'];
               $useremail = $row['u_email'];
               $userphone = $row['u_phone'];
               $userdob = $row['u_dob'];
               $gender = $row['u_sex'];
               $id = $row['u_id'];
           $data .= '  
           <script>$(".modal").modal();</script>
            <tr>        
                 <td>'.$username.'</td>  
                 <td>'.$useremail.'</td>  
                 <td>'.$userphone.'</td>  
                 <td>'.$userdob.'</td>  
                 <td>'.$gender.'</td>  
                 <td><a class="btn green" href="index.php?id='.$id.'&mode=edit">Update</a></td>  
                      
                
            </tr>  
            ';  
           }
 
           return $data;
       }else{
           return false;
       }

    }

    public function updatedata($id){
        global $conn;
        $sql = "SELECT `u_id`, `u_name`, `u_email`, `u_phone`, `u_dob`, `u_sex`, `u_created_date`, `u_modified_date` FROM `user_info` WHERE u_id = $id";
        $query = $conn->query($sql); 
        if($query->num_rows > 0){
            while($row = $query->fetch_assoc())
            {
                $data[] = $row;
            }
           return $data;
    }
}
}



?>