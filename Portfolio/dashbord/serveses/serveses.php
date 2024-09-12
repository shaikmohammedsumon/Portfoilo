<?php 
    include "../master/header.php";
    include "../../config/config.php";

    $service_read = "SELECT * FROM services";
    $services = mysqli_query($conn,$service_read); 


?>

    <div class="row">
    <div class="col">
        <div class="page-description">
                <h1>Serveses</h1>
        </div>
    </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                <h4>Serveses List</h4>
                <a href="create.php" type="submit" name="submit" class="btn btn-outline-success m-b-xs my-2">Created</a>
                </div>
                <div class="card-body">

                    <div class="example-content">
                        <table class="table">
                            <thead class="table-derk">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Icon</th>
                                    <th scope="col">title</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $count= 1; foreach($services as $service) :?>
                            <tr>
                                <td><?= $count++;?></td>
                                <td><i class="fa-3x <?= $service['icon']?>"></i></td>
                                <td><?= $service['title']?></td>
                                <td>
                                    <a href="store.php?id=<?= $service['id'];?>" class="<?= ($service['status'] == 'deactive') ? 'badge bg-danger': 'badge bg-success' ?> text-white">
                                        <?= $service['status']?>
                                    </a>
                                </td>
                                <td>
                                    <div class="d-flex justify-content-around">
                                        <a href="update.php?eidit=<?= $service['id'];?>"><i class="fa fa-chain text-seccess fa-2x"></i></a>
                                        <a href="store.php?deleit_ID=<?= $service['id'];?>"><i class="fa fa-trash-o text-danger fa-2x"></i></a>
                                    </div>
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