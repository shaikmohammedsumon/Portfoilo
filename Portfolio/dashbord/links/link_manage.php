<?php 
    session_start();
    require "../../config/config.php";


    if(isset($_POST['link_tnd'])){
        print_r($_POST);
        $wellcome = $_POST['wellcome'];
        $title_name = $_POST['title_name'];
        $description = $_POST['description'];

        $sql = "INSERT INTO link_tnd(wellcome,name,description) VALUES('$wellcome','$title_name','$description')";
        mysqli_query($conn,$sql);
        header("location: links.php");

    }


    if(isset($_GET['status_idtnd'])){
        $id = $_GET['status_idtnd'];

        $education = "SELECT * FROM link_tnd WHERE id='$id'";
        $regult = mysqli_query($conn,$education);
        $regults = mysqli_fetch_assoc($regult);

        if($regults['status'] == 'deactive'){

            $deactivate_all = "UPDATE link_tnd SET status='deactive'";
            mysqli_query($conn, $deactivate_all);

            $update = "UPDATE link_tnd SET status='active' WHERE id='$id'";
            mysqli_query($conn,$update);
            header("location: links.php"); 

        }else{
            
            $deactivate_all = "UPDATE link_tnd SET status='deactive'";
            mysqli_query($conn, $deactivate_all);


            $update = "UPDATE link_tnd SET status ='deactive' WHERE id='$id'";
            mysqli_query($conn,$update);
            header("location: links.php"); 
        }
    }


    if(isset($_GET['delete_idtnd'])){
        $id= $_GET['delete_idtnd'];

        $update = "DELETE FROM link_tnd WHERE id='$id'";
            mysqli_query($conn,$update);
            header("location: links.php"); 
    }









    if(isset($_POST['submit'])){

        $id = $_SESSION['auth_id'];

        $facebook = $_POST['facebook'];
        $instragram = $_POST['instragram'];
        $twitter = $_POST['twitter'];
        $telegram = $_POST['telegram'];


        $sql = "INSERT INTO links(user_id,facebook,instragram,twitter,telegram) VALUES('$id','$facebook','$instragram','$twitter','$telegram')";
        mysqli_query($conn,$sql);

        header("location: links.php");
    }


    if(isset($_GET['status_id'])){
        $id = $_GET['status_id'];

        $education = "SELECT * FROM links WHERE id='$id'";
        $regult = mysqli_query($conn,$education);
        $regults = mysqli_fetch_assoc($regult);

        if($regults['status'] == 'deactive'){

            $deactivate_all = "UPDATE links SET status='deactive'";
            mysqli_query($conn, $deactivate_all);

            $update = "UPDATE links SET status='active' WHERE id='$id'";
            mysqli_query($conn,$update);
            header("location: links.php"); 

        }else{
            
            $deactivate_all = "UPDATE links SET status='deactive'";
            mysqli_query($conn, $deactivate_all);


            $update = "UPDATE links SET status ='deactive' WHERE id='$id'";
            mysqli_query($conn,$update);
            header("location: links.php"); 
        }
    }

    if(isset($_GET['delete_id'])){
        $id= $_GET['delete_id'];

        $update = "DELETE FROM links WHERE id='$id'";
            mysqli_query($conn,$update);
            header("location: links.php"); 
    }
?>