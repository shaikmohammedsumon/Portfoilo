<?php 

    include '../master/header.php';
    require '../../config/config.php';

?>
        <!-- contentf start  -->
        <div class="row">
            <div class="col">
                <div class="page-description">
                        <h1>Dashboard !</h1>
                </div>
            </div>
        </div>

        

        <div class="row">
            <div class="col-12">
            <?php if(isset($_SESSION['auth_name'])) :?>
            <div class="alert alert-custom" role="alert">
                <div class="custom-alert-icon icon-dark"><i class="material-icons-outlined">done</i></div>
                    <div class="alert-content">
                        <span class="alert-title">Welcome Cheif, Mr.<?= $_SESSION['auth_name'];?></span>
                        <span class="alert-text">your email = <?= $_SESSION['auth_email'];?></span>
                        
                    </div>
                </div>
            <?php endif; unset($_SESSION['auth_name'])?>
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <div class="card">
                    <div class="card-header">
                        User Lils
                    </div>
                    <div class="card-body" style="overflow-y:scroll; height:500px;">

                    <?php 
                    
                    $sql = "SELECT * FROM register";
                    $regult = mysqli_query($conn,$sql);

                    if(mysqli_num_rows($regult) > 0){
                    ?>
                    <table class="table">
                          <thead class="table-dark">
                                <tr>
                                    <th scope="col"> # </th>
                                    <th scope="col">name</th>
                                    <th scope="col">email</th>
                                </tr>
                            </thead>
                            <?php 
                                $count = 1;
                                while($row = mysqli_fetch_assoc($regult)){
                                    $id = $_SESSION['auth_id'];

                                    if($row['id'] == $id){
                                        continue;
                                    }
                            ?>
                            <tbody>
                             <tr>
                             <th scope="row"><?php echo $count;?></th>
                             <td><?php echo $row['name'];?></td>
                             <td><?php echo $row['email'];?></td>
                            </tbody>
                            <?php $count ++;}  ?>
                    </table>
                    <?php } ?>
                    </div>
                </div>
            </div>
        </div>


        <!-- contentf end  -->

<?php 
    include '../master/footer.php';
?>                  