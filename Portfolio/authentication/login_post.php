<?php 
session_start();
require "../config/config.php";

    if(isset($_POST['login_btn'])){
        $email = $_POST['email'];
        $password = $_POST['password'];

        $email_regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';

        $password_regex_lenght = '/^(?=\S{8,})/';
        $password_regex_uppercase = '/^(?=\S*[A-Z])/';
        $password_regex_lowercase = '/^(?=\S*[a-z])/' ;
        $password_regex_number = '/^(?=\S*[\d])/' ;
        $password_regex_cerecter = '/^(?=\S*[\W])/' ;

        $flag = false;

        if(!$email){ // যদি ফাকা থাকে তাহলে error দেখাবে।  
            $_SESSION['email_error'] = "email field is Required!";
            $flag = true;
            header('location: login.php');
            }else if(!preg_match($email_regex, $email)){
                $_SESSION['email_error'] = "email_regex";
                $flag = true;
                header('location: login.php');
            }
            if(!$password){
                $_SESSION['password_error'] = "Email field is Required!!";
                $flag = true;
                header("location: login.php");
            }else if(!preg_match($password_regex_lenght,$password)){
                $_SESSION['password_error'] = "Password must be minimum 8 characters length*";
                $flag = true;
                header("location: login.php");
            }else if(!preg_match($password_regex_uppercase,$password)){
                $_SESSION['password_error'] = "Password must be at least one uppercase letter";
                $flag = true;
                header("location: login.php");
            }else if(!preg_match($password_regex_lowercase,$password)){
                $_SESSION['password_error'] = "Password must be at least one lowercase letter";
                $flag = true;
                header("location: login.php");
            }else if(!preg_match($password_regex_number,$password)){
                $_SESSION['password_error'] = "Password must be at least one number";
                $flag = true;
                header("location: login.php");
            }else if(!preg_match($password_regex_cerecter,$password)){
                $_SESSION['password_error'] = "Password must be which is non-word characters.";
                $flag = true;
                header("location: login.php");
            }
            

          if(false){
            echo "valo na";
          }else{


            $encript = sha1($password);
            $sql = "SELECT COUNT(*) AS 'result' FROM register WHERE email='$email' && password='$encript'";

            $result= mysqli_query($conn,$sql);

            if(mysqli_fetch_assoc($result)['result'] == 1){
                $sql1 = "SELECT * FROM register WHERE email='$email'";
                $result1 = mysqli_query($conn,$sql1);

                $user = mysqli_fetch_assoc($result1);

                $_SESSION['auth_id'] = $user['id'];
                $_SESSION['auth_name'] = $user['name'];
                $_SESSION['temp_name'] = $user['name'];
                $_SESSION['auth_email'] = $user['email'];
                
                header("location: ../dashbord/home/home.php");

                echo "valo";
            }else{
                $_SESSION['login_error'] = "credential doesn'n match!!";
                header("location: login.php");
            }
            
        }  
    }
?>