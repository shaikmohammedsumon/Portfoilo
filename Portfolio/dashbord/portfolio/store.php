<?php 
    session_start();
    include "../../config/config.php";
    if(isset($_POST['port_created'])){

        $title = $_POST['title'];
        $subtitle = $_POST['subtitle'];
        $description = $_POST['description'];
        $image = $_FILES['image'];

        $image = $_FILES['image']['name'];
        $tmp_img = $_FILES['image']['tmp_name'];

        
        if($image){
            $explode = explode('.',$image);
            $extrention = end($explode);
            $coustom_name_image =  $_SESSION['auth_id']."-".$title."-".date("d M Y").".".$extrention;
            $local_path = "../../public/portfolio/".$coustom_name_image;

            if(move_uploaded_file($tmp_img,$local_path)){
                if($title &&  $subtitle && $description && $image){
                    $servises_query = "INSERT INTO portfolio(title,subtitle,description,image)
                    VALUES('$title','$subtitle','$description','$coustom_name_image')";
                    mysqli_query($conn,$servises_query);
                    header("location: http://localhost/Class/kufa/dashbord/portfolio/portfolio.php");
                }
            }

        }else{
            if($title &&  $subtitle && $description && $image){
                $servises_query = "INSERT INTO portfolio(title,subtitle,description,image)
                VALUES('$title','$subtitle','$description','$coustom_name_image')";
                mysqli_query($conn,$servises_query);
                header("location: http://localhost/Class/kufa/dashbord/portfolio/portfolio.php");
            }
        }



    }


    if(isset($_GET['status_id'])){
        $id =$_GET['status_id'];
        
        $portfolio_read = "SELECT * FROM portfolio WHERE id = $id";
        $portfolios = mysqli_query($conn,$portfolio_read);
        $portfolio = mysqli_fetch_assoc($portfolios);

        if($portfolio['status'] == 'deactive'){
            $update = "UPDATE portfolio SET status='active' WHERE id=$id";
            mysqli_query($conn,$update);
            header("location: http://localhost/Class/kufa/dashbord/portfolio/portfolio.php");
        }else{
            $update = "UPDATE portfolio SET status='deactive' WHERE id=$id";
            mysqli_query($conn,$update);
            header("location: http://localhost/Class/kufa/dashbord/portfolio/portfolio.php");
        }
    }

    if(isset($_GET['delete_id'])){
        $id = $_GET['delete_id'];

        $portfolio_read = "SELECT * FROM portfolio WHERE id = $id";
        $portfolios = mysqli_query($conn,$portfolio_read);
        $portfolio = mysqli_fetch_assoc($portfolios);


        if($portfolio['image']){

            $old_image = $portfolio['image'];
            $old_path = "../../public/portfolio/".$old_image;

            if(file_exists($old_path)){
                unlink($old_path);
                
                $portfolio_query = "DELETE FROM portfolio WHERE id = $id";
                mysqli_query($conn,$portfolio_query);
                header("location: http://localhost/Class/kufa/dashbord/portfolio/portfolio.php");
            }
        }else{
            $portfolio_query = "DELETE FROM portfolio WHERE id = $id";
            mysqli_query($conn,$portfolio_query);
            header("location: http://localhost/Class/kufa/dashbord/portfolio/portfolio.php");
        }


    }


    if(isset($_POST['update_port'])){
        if(isset($_GET['edit_id'])){
            
            $id = $_GET['edit_id'];
            $title = $_POST['title'];
            $subtitle = $_POST['subtitle'];
            $description = $_POST['description'];
        
            $image = $_FILES['image']['name'];
            $tmp_img = $_FILES['image']['tmp_name'];
        
            if($image){
                $select_port = "SELECT * FROM portfolio WHERE id='$id'";
                $connectdb = mysqli_query($conn,$select_port);
                $port = mysqli_fetch_assoc($connectdb);
            
                if($port['image']){
                    $old_img = $port['image'];
                    $old_path = "../../public/portfolio/".$old_img;
                    if(file_exists($old_path)){
                        unlink($old_path);
                    }
                }
                $explode = explode('.',$image);
                $extension = end($explode);
                $custom_name_img = $_SESSION['auth_id'].'-'.$title.'-'.date("d-m-Y")."." .$extension;
                $local_path = "../../public/portfolio/".$custom_name_img;
        
                if(move_uploaded_file($tmp_img,$local_path)){
        
                    $query = "UPDATE portfolio SET title='$title',subtitle='$subtitle',description='$description',image='$custom_name_img' WHERE id='$id'";
                    mysqli_query($conn,$query);
                    $_SESSION['port_created'] = "portfolio update successfully complete";
                    header('location: portfolio.php');
                }
        
            }else{
                $query = "UPDATE portfolio SET title='$title',subtitle='$subtitle',description='$description' WHERE id='$id'";
                mysqli_query($conn,$query);
                $_SESSION['port_created'] = "portfolio update successfully complete";
                header('location: portfolio.php'); 
            }
        }
        
        }

?>