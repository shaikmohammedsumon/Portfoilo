<?php 
    session_start();
    require "../../config/config.php";

    if(isset($_POST['submit'])){
        $name = $_POST['name'];

        if($name){
            $id = $_SESSION['auth_id'];
            $sql = "UPDATE register SET name='$name' WHERE id ='$id'";
            $result = mysqli_query($conn,$sql);
            $_SESSION['temp_name'] = $name;
            $_SESSION['name_update'] = "Name Successfully Update";
            header("location: ../profile/profile.php"); 
        }else{
            $_SESSION['name_update'] = "please flap fill";
            header("location: ../profile/profile.php"); 
        }        
    }

    if(isset($_POST['pass_submit'])){
        $id = $_SESSION['auth_id'];

        $old_pass = $_POST['old_pass'];
        $new_Pass = $_POST['new_Pass'];
        $confirm_pass = $_POST['confirm_pass'];


        if($old_pass && $new_Pass && $confirm_pass){
            $enc_old = sha1($old_pass);
            $old_pass_query = "SELECT COUNT(*) AS result FROM register WHERE id='$id' AND password='$enc_old'";
            $connect = mysqli_query($conn,$old_pass_query);

            $result = mysqli_fetch_assoc($connect)['result'];

            if($result == 1){
                if($new_Pass == $confirm_pass){
                    $enc_new = sha1($new_Pass);
                    $sql_pass = "UPDATE register SET password='$enc_new' WHERE id ='$id'";
                    $connect = mysqli_query($conn,$sql_pass);
                    $_SESSION['pass_update'] = "password update Successfully Update";
                    header("location: ../profile/profile.php");  

                }

            }else{
                $_SESSION['pass_error'] = "old passwoed dosen't match!!";
                header("location: ../profile/profile.php");  
            }
            


        }else{
            $_SESSION['pass_error'] = "please all fil!!";
            header("location: ../profile/profile.php"); 
        }
    }


    if(isset($_POST['image_submit'])){
        $id = $_SESSION['auth_id'];
        $image = $_FILES['image']['name'];
        $temp_image =  $_FILES['image']['tmp_name'];

       if($image){
        $explode = explode('.',$image);
        // print_r( $explode);

        $extrention = end($explode);
        // echo $extrention; 

        $coustom_name_image = $_SESSION['auth_id'] .'-'.$_SESSION['temp_name'].'-'.date("d-m-y").'.'.$extrention;
        // echo $coustom_name_image; 
        $local_path = "../../public/profile/$coustom_name_image";


        if(move_uploaded_file($temp_image,$local_path)){
            $query = "UPDATE register SET image='{$coustom_name_image}' WHERE id='{$id}'";
            mysqli_query($conn,$query);
            header("location: profile.php");
        }else{
            echo "kharap";
        }


       }
           
    }





?>