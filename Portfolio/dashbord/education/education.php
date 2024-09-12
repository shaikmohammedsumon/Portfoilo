<?php 
    include "../master/header.php";
    include "../../config/config.php";
    $education = "SELECT * FROM education";
    $regult = mysqli_query($conn,$education);
?>

<div class="row">
    <div class="col">
        <div class="page-description">
                <h1>Education</h1>
        </div>
    </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                    <h4>Education List</h4>
                    <a href="create.php" type="submit" name="submit" class="btn btn-outline-success m-b-xs my-2">Created</a>
                    </div>

                    <table class="table">
                        <thead class="table-derk">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">title</th>
                                <th scope="col">Pashing Year</th>
                                <th scope="col">percentage</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                        $num = 1;
                            foreach($regult as $regults):
                        ?>
                        <tr>
                            
                            <td><?= $num ++;?></td>
                            <td><?= $regults['title'];?></td>
                            <td><?= $regults['year'];?></td>
                            <td><?= $regults['ratio'];?> %</td>
                            <td><a href="store.php?status_id=<?= $regults['id'];?>" class="<?= ($regults['status'] == 'deactive') ? 'badge bg-danger text-white':'badge bg-success text-white' ?>"><?= $regults['status'];?></a></td>
                            <td class="d-flex justify-content-around">
                            <a href="update.php?edit_id=<?= $regults['id'];?>"><i class="fa fa-chain text-seccess fa-2x"></i></a>
                            <a href="store.php?delete_id=<?= $regults['id'];?>"><i class="fa fa-trash-o text-danger fa-2x"></i></a>
                            </td>
                        
                        </tr> 
                        <?php endforeach;?>       
                    </tbody>
                </div>
            </div>
        </div>
    </div>
<?php 
    include "../master/footer.php";
?>