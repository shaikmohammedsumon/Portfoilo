<?php 
    include "../../config/config.php";
    if(isset($_POST['created'])){

        $title = $_POST['title'];
        $number = $_POST['number'];
        $icon = $_POST['icon'];


        if($title && $number && $number){
            $insert = "INSERT INTO fact_area(title,number,icon) VALUES('$title','$number','$icon')";
            mysqli_query($conn,$insert);
            header("location: http://localhost/Class/kufa/dashbord/fact_area/fact_area.php");
        }
    }


    if(isset($_GET['status_id'])){
        $id = $_GET['status_id'];

        $service_read = "SELECT * FROM fact_area WHERE id='$id'";
        $services = mysqli_query($conn,$service_read); 
        $service = mysqli_fetch_assoc($services);

        if($service['status'] == 'deactive'){
            $update = "UPDATE fact_area SET status='active' WHERE id='$id'";
            mysqli_query($conn,$update);
            header("location: http://localhost/Class/kufa/dashbord/fact_area/fact_area.php");

        }else{
            $update = "UPDATE fact_area SET status ='deactive' WHERE id='$id'";
            mysqli_query($conn,$update);
            header("location: http://localhost/Class/kufa/dashbord/fact_area/fact_area.php");

        }

    }

    if(isset($_GET['deleit_ID'])){
        $id = $_GET['deleit_ID'];
        $servises_query = "DELETE FROM fact_area WHERE id = $id";
        mysqli_query($conn,$servises_query);
        header("location: http://localhost/Class/kufa/dashbord/fact_area/fact_area.php");
    }

    if(isset($_GET['upid'])){
        $id = $_GET['upid'];
    
        $title = $_POST['title'];
        $number = $_POST['number'];
        $icon = $_POST['icon'];
    
        $update = "UPDATE fact_area SET title='$title', number='$number', icon='$icon' WHERE id='$id'";
        mysqli_query($conn,$update);
        header("location: http://localhost/Class/kufa/dashbord/fact_area/fact_area.php");
    }
?>