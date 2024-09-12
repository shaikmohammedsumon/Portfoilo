<?php 
    include "../master/header.php";
    include "../../config/config.php";

    $email_read = "SELECT * FROM emails";
    $email = mysqli_query($conn,$email_read); 


?>

    <div class="row">
    <div class="col">
        <div class="page-description">
                <h1>Email</h1>
        </div>
    </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                <h4>Email List</h4>
                <!-- <a href="create.php" type="submit" name="submit" class="btn btn-outline-success m-b-xs my-2">Created</a> -->
                </div>
                <div class="card-body">

                    <div class="example-content">
                        <table class="table">
                            <thead class="table-derk">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">name</th>
                                    <th scope="col">email</th>
                                    <th scope="col">body</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $count= 1; foreach($email as $view) :?>
                            <tr>
                                <td><?= $count++;?></td>
                                <td><?= $view['name']?></td>
                                <td><?= $view['email']?></td>
                                <td><?= substr($view['body'],0,50)?>..</td>
                                <td>
                                    
                                    <a href="store.php?deleit_ID=<?= $view['id'];?>"><i class="fa fa-trash-o text-danger fa-2x"></i></a>
                                    
                                    
                                </td>
                            </tr>
                            <?php endforeach;?>

                            </tbody>
                        </table>
                    </div>

                </div>
                
            </div>
        </div>
    </div>



<?php 
    
   

    include "../master/footer.php";

?>