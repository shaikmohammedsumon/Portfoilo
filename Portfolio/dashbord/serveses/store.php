<?php 
    include "../../config/config.php";
    if(isset($_POST['created'])){

        $title = $_POST['title'];
        $description = $_POST['description'];
        $icon = $_POST['icon'];

        if($title && $description && $icon){
            $servises_query = "INSERT INTO services(title,description,icon)VALUES('$title','$description','$icon')";
            mysqli_query($conn,$servises_query);
            header("location: http://localhost/Class/kufa/dashbord/serveses/serveses.php");

        }


    }

    if(isset($_GET['deleit_ID'])){
        $id = $_GET['deleit_ID'];
        $servises_query = "DELETE FROM services WHERE id = $id";
        mysqli_query($conn,$servises_query);
        header("location: http://localhost/Class/kufa/dashbord/serveses/serveses.php");
    }


    if(isset($_GET['id'])){
        $id = $_GET['id'];

        $service_read = "SELECT * FROM services WHERE id='$id'";
        $services = mysqli_query($conn,$service_read); 
        $service = mysqli_fetch_assoc($services);

        if($service['status'] == 'deactive'){
            $update = "UPDATE services SET status='active' WHERE id='$id'";
            mysqli_query($conn,$update);
            header("location: http://localhost/Class/kufa/dashbord/serveses/serveses.php");
        }else{
            $update = "UPDATE services SET status ='deactive' WHERE id='$id'";
            mysqli_query($conn,$update);
            header("location: http://localhost/Class/kufa/dashbord/serveses/serveses.php");
        }

    }


    if(isset($_GET['upid'])){
        $id = $_GET['upid'];
    
        $title = $_POST['title'];
        $description = $_POST['description'];
        $icon = $_POST['icon'];
    
        $update = "UPDATE services SET title='$title', description='$description', icon='$icon' WHERE id='$id'";
        mysqli_query($conn,$update);
        header("location: http://localhost/Class/kufa/dashbord/serveses/serveses.php");
    }
    


?>