<?php 
    include "../master/header.php";


?>

    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    Education
                </div>
                <div class="card-body">
                    <form action="store.php" method="POST">
                        <div class="example-content">
                           
                            <label class="form-label">Title</label>
                            <input type="text" name="title" class="form-control" aria-describedby="emailHelp">

                            <label class="form-label">Pashing Year</label>
                            <input type="text" name="year" class="form-control" aria-describedby="emailHelp">

                            <label class="form-label" >Education Ratio/percentage</label>
                            <select class="form-select"  name="ratio" id="">
                                <option value="0" disabled Selected>Select</option>
                                <?php 
                                    for($i = 1; $i <=100; $i++): 
                                ?>
                                <option value="<?= $i?>"><?= $i?> %</option>
                                <?php endfor;?>
                            </select>

                            <button type="submit" name="created" class="btn btn-outline-success m-b-xs my-2">Save</button>
                        </div>
                    </form> 
                </div>
                
            </div>
        </div>

    </div>



<?php 
    include "../master/footer.php";
?>


