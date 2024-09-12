<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php 
        session_start();
        // require "./config/config.php";
        require "../../config/config.php";
        
        if(isset($_SESSION['temp_name'])){
        $name = $_SESSION['temp_name'];
        $sql = "SELECT * FROM register WHERE name='$name'";
        $result = mysqli_query($conn,$sql);

        if(mysqli_num_rows($result) > 0 ){
            while(mysqli_fetch_assoc($result)){
                echo $name;
            }
        }
        }else{
            echo "no data";
        }
    ?>
    
</body>
</html>