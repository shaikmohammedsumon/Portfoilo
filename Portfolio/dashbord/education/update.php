<?php 
    include "../master/header.php";
    include "../../config/config.php";
    
    if(isset($_GET['edit_id'])){
        $id = $_GET['edit_id'];
        $education = "SELECT * FROM education WHERE id='$id'";
        $regult = mysqli_query($conn,$education);
        $regults = mysqli_fetch_assoc($regult);
    }

?>

    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    Education
                </div>
                <div class="card-body">
                    <form action="store.php?update_id=<?= $regults['id']?>" method="POST">
                        <div class="example-content">
                           
                            <label class="form-label">Title</label>
                            <input type="text" name="title" class="form-control" aria-describedby="emailHelp" value="<?= $regults['title']?>">

                            <label class="form-label">Pashing Year</label>
                            <input type="texxt" name="year" class="form-control" aria-describedby="emailHelp" value="<?= $regults['year']?>">

                            <label class="form-label" >Education Ratio/percentage</label>
                            <select class="form-select"  name="ratio" id="" ">
                                <option value="<?= (isset($regults['ratio']))? $regults['ratio']: '0'?>" Selected> <?= (isset($regults['ratio']))? $regults['ratio']: 'Select'?></option>
                                <?php 
                                    for($i = 1; $i <=100; $i++): 
                                ?>
                                <option value="<?= $i?> %"><?= $i?> %</option>
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


