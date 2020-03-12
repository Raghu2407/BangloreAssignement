 <?php  
 //action.php  
 include 'includes/functions.php';  
 $object = new task();  
 if(isset($_POST["action"]))  
 {  
      if($_POST["action"] == "Load")  
      {  
           echo $object->getdata();  
           
      }  
 }  
 ?>