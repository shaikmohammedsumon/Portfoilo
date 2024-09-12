<?php

    include "../master/header.php";

    $portfolio_read = "SELECT * FROM portfolio";
    $portfolios = mysqli_query($conn,$portfolio_read);
    $portfolio = mysqli_fetch_assoc($portfolios);

?>
    <div class="row">
    <div class="col">
        <div class="page-description">
                <h1>Portfolio Page</h1>
        </div>
    </div>
    </div>
<div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                <h4>Portfolio</h4>
                <a href="create.php" type="submit" name="submit" class="btn btn-outline-success m-b-xs my-2">Created</a>
                </div>
                <div class="card-body">

                    <div class="example-content">
                        <table class="table">
                            <thead class="table-derk">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">image</th>
                                    <th scope="col">title</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php if($portfolio == 0):?>
                            <tr>
                                <td colspan="5" style="text-align:center; color:red;">No Data Found</td>
                            </tr>
                            <?php endif; $count= 1; foreach($portfolios as $portfolio) :?>
                            <tr>
                                <td><?= $count++?></td>
                                <td>
                                    <img src="../../public/portfolio/<?= $portfolio['image']?>" alt="" style="width: 80px;height:80px;">
                                </td>
                                <td><?= $portfolio['title']?></td>
                                <td>
                                    <a href="store.php?status_id=<?= $portfolio['id'];?>" class="<?= ($portfolio['status'] == "deactive") ? "badge bg-danger": "badge bg-success"?> text-white "><?= $portfolio['status']?></a>
                                </td>
                                <td>
                                    <div class="d-flex justify-content-around">
                                        <a href="edit.php?edit_id=<?= $portfolio['id'];?>"><i class="fa fa-chain text-seccess fa-2x"></i></a>
                                        <a href="store.php?delete_id=<?= $portfolio['id'];?>"><i class="fa fa-trash-o text-danger fa-2x"></i></a>
                                    </div>
                                </td>
                        
                            </tr>
                            <?php endforeach;?>
                           
                            </tbody>
                        </table>
                    </div>

                </div>
                
            </div>


<?php
    include "../master/footer.php";
?>