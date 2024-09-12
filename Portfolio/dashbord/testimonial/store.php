<?php 
    session_start();
    include "../../config/config.php";
    if(isset($_POST['created'])){

        $name = $_POST['name'];
        $title = $_POST['title'];
        $description = mysqli_real_escape_string($conn, $_POST['description']);

        $image = $_FILES['image'];
        $image = $_FILES['image']['name'];
        $tmp_img = $_FILES['image']['tmp_name'];

        
        if($image){
            $explode = explode('.',$image);
            $extrention = end($explode);
            $coustom_name_image =  $_SESSION['auth_id']."-".$title."-".date("d M Y").".".$extrention;
            $local_path = "../../public/testimonial/".$coustom_name_image;

            if(move_uploaded_file($tmp_img,$local_path)){
                if($name && $title && $description && $image){
                    $servises_query = "INSERT INTO testimonial(name,title,descprition,image)VALUES('$name','$title','$description','$coustom_name_image')";
                    mysqli_query($conn,$servises_query);
                    header("location: http://localhost/Class/kufa/dashbord/testimonial/testimonial.php");
                }
            }

        }else{
            if($name && $title && $description && $image){
                $servises_query = "INSERT INTO testimonial(name,title,descprition,image)VALUES('$name','$title','$description','$image')";
                mysqli_query($conn,$servises_query);
                header("location: http://localhost/Class/kufa/dashbord/testimonial/testimonial.php");
            }
        }

        // if($name && $title && $description){
        //     $servises_query = "INSERT INTO testimonial(name,title,descprition)VALUES('$name','$title','$description')";
        //     mysqli_query($conn,$servises_query);
        //     header("location: http://localhost/Class/kufa/dashbord/testimonial/testimonial.php");

        // }


    }

    if(isset($_GET['deleit_ID'])){
        $id = $_GET['deleit_ID'];
        

        $testimonial_read = "SELECT * FROM testimonial WHERE id = $id";
        $testimonial = mysqli_query($conn,$testimonial_read);
        $testimonials = mysqli_fetch_assoc($testimonial);


        if($testimonials['image']){

            echo $old_image = $testimonials['image'];
            
            $old_path = "../../public/testimonial/".$old_image;

            if(file_exists($old_path)){
                unlink($old_path);
                
                $testimonial_query = "DELETE FROM testimonial WHERE id = $id";
                mysqli_query($conn,$testimonial_query);
                header("location:  http://localhost/Class/kufa/dashbord/testimonial/testimonial.php");
            }
        }else{
            $testimonial_query = "DELETE FROM testimonial WHERE id = $id";
            mysqli_query($conn,$testimonial_query);
            header("location:  http://localhost/Class/kufa/dashbord/testimonial/testimonial.php");
        }

        // $servises_query = "DELETE FROM testimonial WHERE id = $id";
        // mysqli_query($conn,$servises_query);
        // header("location: http://localhost/Class/kufa/dashbord/testimonial/testimonial.php");
    }


    if(isset($_GET['status_id'])){
        $id = $_GET['status_id'];
        echo "valo";
    

        $service_read = "SELECT * FROM testimonial WHERE id='$id'";
        $services = mysqli_query($conn,$service_read); 
        $service = mysqli_fetch_assoc($services);

        if($service['status'] == 'deactive'){
            $update = "UPDATE testimonial SET status='active' WHERE id='$id'";
            mysqli_query($conn,$update);
            header("location: http://localhost/Class/kufa/dashbord/testimonial/testimonial.php");
        }else{
            $update = "UPDATE testimonial SET status ='deactive' WHERE id='$id'";
            mysqli_query($conn,$update);
            header("location: http://localhost/Class/kufa/dashbord/testimonial/testimonial.php");
        }

    }
















    if(isset($_GET['upid'])){
        $id = $_GET['upid'];
    
        $name = $_POST['name'];
        $title = $_POST['title'];
        $description = mysqli_real_escape_string($conn, $_POST['description']);



         
        echo $image = $_FILES['image']['name'];

        $tmp_img = $_FILES['image']['tmp_name'];
    
        if($image){
            $select_port = "SELECT * FROM testimonial WHERE id='$id'";
            $connectdb = mysqli_query($conn,$select_port);
            $port = mysqli_fetch_assoc($connectdb);
        
            if($port['image']){
                $old_img = $port['image'];
                $old_path = "../../public/testimonial/".$old_img;
                if(file_exists($old_path)){
                    unlink($old_path);
                }
            }
            $explode = explode('.',$image);
            $extension = end($explode);
            $custom_name_img = $_SESSION['auth_id'].'-'.$title.'-'.date("d-m-Y")."." .$extension;
            $local_path = "../../public/testimonial/".$custom_name_img;
    
            if(move_uploaded_file($tmp_img,$local_path)){
    
                $query = "UPDATE testimonial SET name='$name', title='$title', descprition='$description', image='$custom_name_img' WHERE id='$id'";
                mysqli_query($conn,$query);
                $_SESSION['port_created'] = "testimonial update successfully complete";
                header('location: testimonial.php');
            }
    
        }else{
            $query = "UPDATE testimonial SET name='$name', title='$title', descprition='$description', image='$custom_name_img' WHERE id='$id'";
            mysqli_query($conn,$query);
            $_SESSION['port_created'] = "portfolio update successfully complete";
            header('location: portfolio.php'); 
        }
    










    
        // $update = "UPDATE testimonial SET name='$name', title='$title', descprition='$description'  WHERE id='$id'";
        // mysqli_query($conn,$update);
        // header("location: http://localhost/Class/kufa/dashbord/testimonial/testimonial.php");
    }
    


?>