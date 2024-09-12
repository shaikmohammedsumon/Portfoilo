<?php 
    include "../../config/config.php";
    
   if(isset($_GET['deleit_ID'])){
        $id = $_GET['deleit_ID'];
       $servises_query = "DELETE FROM emails WHERE id = $id";
       mysqli_query($conn,$servises_query);
       header("location: http://localhost/Class/kufa/dashbord/email/email.php");
   }else{
    // header("location: http://localhost/Class/kufa/dashbord/email/email.php");
   }


?>