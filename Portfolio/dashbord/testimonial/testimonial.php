<?php 
    include "../master/header.php";
    include "../../config/config.php";

    $testimonial = "SELECT * FROM testimonial";
    $result = mysqli_query($conn,$testimonial); 


?>

    <div class="row">
    <div class="col">
        <div class="page-description">
                <h1>Testimonial</h1>
        </div>
    </div>
    </div>


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                <h4>Testimonial List</h4>
                <a href="create.php" type="submit" name="submit" class="btn btn-outline-success m-b-xs my-2">Created</a>
                </div>
                <div class="card-body">

                    <div class="example-content">
                        <table class="table">
                            <thead class="table-derk">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $num =1; foreach($result as $view):?>
                            <tr>
                                <td><?= $num ++;?></td>
                                <td><?= $view['name'];?></td>
                                <td><?= $view['title']?></td>
                                <td>
                                    <a href="store.php?status_id=<?= $view['id'];?>" class="<?= ($view['status'] == "deactive") ? "badge bg-danger": "badge bg-success"?> text-white "><?= $view['status']?></a>
                                </td>
                                <td>
                                    <div class="d-flex justify-content-around">
                                        <a href="update.php?eidit=<?= $view['id'];?>"><i class="fa fa-chain text-seccess fa-2x"></i></a>
                                        <a href="store.php?deleit_ID=<?= $view['id'];?>"><i class="fa fa-trash-o text-danger fa-2x"></i></a>
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