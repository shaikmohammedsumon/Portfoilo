<?php 
    include "../master/header.php";
    include "../../config/config.php";
    include "../../public/fonts/fonts.php";

    $id = $_GET['eidit'];
    $service_read = "SELECT * FROM fact_area WHERE id='$id'";
    $view = mysqli_fetch_assoc(mysqli_query($conn,$service_read)); 


?>

    <div class="row">
        <div class="col">
            <div class="page-description">
                    <h1>Edit services</h1>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-8">
            <div class="card">
                <div class="card-header">
                    New Service
                </div>
                <div class="card-body">
                    <form action="store.php?upid=<?= $view['id'];?>" method="POST">
                        <div class="example-content">
                           
                            <label class="form-label">Title</label>
                            <input type="text" name="title" class="form-control" aria-describedby="emailHelp" value="<?=  $view['title']?>">

                            <label class="form-label">number</label>
                            <input type="description" name="number" class="form-control" aria-describedby="emailHelp" value="<?=  $view['number']?>">

                            <label class="form-label">Icons</label>
                            <input type="text" name="icon" class="form-control hudai" aria-describedby="emailHelp" readonly value="<?=  $view['icon']?>">

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

                            <button type="submit" name="update" class="btn btn-outline-success m-b-xs my-2">Save</button>
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