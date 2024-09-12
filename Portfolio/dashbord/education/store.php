<?php 
    include "../../config/config.php"; 
    if(isset($_POST['created'])){

        $title = $_POST['title'];
        $year = $_POST['year'];
        $ratio = $_POST['ratio'];
    
        if($title && $year && $ratio){
            if($ratio != "0"){
                $insert = "INSERT INTO education(title,year,ratio) VALUES('$title','$year','$ratio') ";
                mysqli_query($conn,$insert);
                header("location: http://localhost/Class/kufa/dashbord/education/education.php");  
            }else{
                
                header("location: http://localhost/Class/kufa/dashbord/education/create.php");
            }
        }else{
            header("location: http://localhost/Class/kufa/dashbord/education/create.php");
            

        }
    }

    if(isset($_GET['update_id'])){
        $id = $_GET['update_id'];


        $title = $_POST['title'];
        $year = $_POST['year'];
        $ratio = $_POST['ratio'];

        $update = "UPDATE education SET title='$title' , year='$year' , ratio='$ratio'   WHERE id='$id'";
        mysqli_query($conn,$update);
        header("location: http://localhost/Class/kufa/dashbord/education/education.php"); 
    }


    if(isset($_GET['status_id'])){
        $id = $_GET['status_id'];

        $education = "SELECT * FROM education WHERE id='$id'";
        $regult = mysqli_query($conn,$education);
        $regults = mysqli_fetch_assoc($regult);

        if($regults['status'] == 'deactive'){
            $update = "UPDATE education SET status='active' WHERE id='$id'";
            mysqli_query($conn,$update);
            header("location: http://localhost/Class/kufa/dashbord/education/education.php"); 
        }else{
            $update = "UPDATE education SET status ='deactive' WHERE id='$id'";
            mysqli_query($conn,$update);
            header("location: http://localhost/Class/kufa/dashbord/education/education.php"); 
        }
    }

    if(isset($_GET['delete_id'])){
        $id= $_GET['delete_id'];

        $update = "DELETE FROM education WHERE id='$id'";
            mysqli_query($conn,$update);
            header("location: http://localhost/Class/kufa/dashbord/education/education.php"); 
    }



?>