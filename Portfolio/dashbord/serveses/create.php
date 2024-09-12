<?php 
    include "../master/header.php";
    include "../../public/fonts/fonts.php";

?>

    <div class="row">
        <div class="col-8">
            <div class="card">
                <div class="card-header">
                    New Service
                </div>
                <div class="card-body">
                    <form action="store.php" method="POST">
                        <div class="example-content">
                           
                            <label class="form-label">Title</label>
                            <input type="text" name="title" class="form-control" aria-describedby="emailHelp">

                            <label class="form-label">Description</label>
                            <input type="description" name="description" class="form-control" aria-describedby="emailHelp">

                            <label class="form-label">Icons</label>
                            <input type="text" name="icon" class="form-control hudai" aria-describedby="emailHelp" readonly>

                            <div class="card my-3">
                                <div class="card-body" style="overflow-y:scroll;height: 300px;">
                                    <div class="fa-2x">
                                        <?php foreach($fonts as $font) : ?>
                                            <span class="m-2">
                                                <i class="<?= $font?>" onclick="myFun(event)" ></i>
                                            </span>
                                        <?php endforeach;?>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" name="created" class="btn btn-outline-success m-b-xs my-2">Save</button>
                        </div>
                    </form> 
                </div>
                
            </div>
        </div>

    </div>

<script>
    let hudai = document.querySelector('.hudai');
    function myFun(e){
        hudai.value= e.target.classList.value;
    }
</script>


<?php 
    include "../master/footer.php";
?>


