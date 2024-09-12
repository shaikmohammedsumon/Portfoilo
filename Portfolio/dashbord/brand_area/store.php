<?php 
    session_start();
    include "../../config/config.php";

    if(isset($_POST['created'])){
        $image = $_FILES['image'];
        

        $image = $_FILES['image']['name'];
        $tmp_img = $_FILES['image']['tmp_name'];

        
        if($image){
            $explode = explode('.',$image);
            $extrention = end($explode);
           echo  $coustom_name_image =  $_SESSION['auth_id']."-".time()."-".date("d-M-Y").".".$extrention;

           $local_path = "../../public/brand_area/".$coustom_name_image;

            if(move_uploaded_file($tmp_img,$local_path)){
                if($image){
                    $servises_query = "INSERT INTO brand_area(image)
                    VALUES('$coustom_name_image')";
                    mysqli_query($conn,$servises_query);
                    header("location: http://localhost/Class/kufa/dashbord/brand_area/brand.php");
                }
            }

        }else{
            if($image){
                $servises_query = "INSERT INTO brand_area(image)
                VALUES('$coustom_name_image')";
                mysqli_query($conn,$servises_query);
                header("location: http://localhost/Class/kufa/dashbord/brand_area/brand.php");
            }
        }



    }


    if(isset($_GET['status_id'])){
        $id =$_GET['status_id'];
        
        $brand_read = "SELECT * FROM brand_area WHERE id = $id";
        $brand_area = mysqli_query($conn,$brand_read);
        $brand = mysqli_fetch_assoc($brand_area);

        if($brand['status'] == 'deactive'){
            $update = "UPDATE brand_area SET status='active' WHERE id=$id";
            mysqli_query($conn,$update);
            header("location: http://localhost/Class/kufa/dashbord/brand_area/brand.php");

        }else{
            $update = "UPDATE brand_area SET status='deactive' WHERE id=$id";
            mysqli_query($conn,$update);
            header("location: http://localhost/Class/kufa/dashbord/brand_area/brand.php");


        }
    }





    if(isset($_GET['delete_id'])){
        $id = $_GET['delete_id'];

        $brand_read = "SELECT * FROM brand_area WHERE id = $id";
        $brand = mysqli_query($conn,$brand_read);
        $view = mysqli_fetch_assoc($brand);


        if($view['image']){
           $old_image = $view['image'];
           
            $old_path = "../../public/brand_area/".$old_image;

            if(file_exists($old_path)){
                unlink($old_path);
                
                $portfolio_query = "DELETE FROM brand_area WHERE id = $id";
                mysqli_query($conn,$portfolio_query);
                header("location: http://localhost/Class/kufa/dashbord/brand_area/brand.php");

            }
        }else{
            $portfolio_query = "DELETE FROM brand_area WHERE id = $id";
            mysqli_query($conn,$portfolio_query);
            header("location: http://localhost/Class/kufa/dashbord/brand_area/brand.php");
        }


    }


  
?>