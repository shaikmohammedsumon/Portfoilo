<?php 
    include "../master/header.php";
    include "../../config/config.php";
    include "../../public/fonts/fonts.php";

    $id = $_GET['eidit'];
    $testimonial = "SELECT * FROM testimonial WHERE id='$id'";
    $view = mysqli_fetch_assoc(mysqli_query($conn,$testimonial)); 


?>

    <div class="row">
        <div class="col">
            <div class="page-description">
                    <h1>Edit testimonial</h1>
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
                    <form action="store.php?upid=<?= $view['id'];?>" method="POST" enctype="multipart/form-data">
                        <div class="example-content">
                           
                            <label class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" aria-describedby="emailHelp" value="<?=  $view['name']?>">

                            <label class="form-label">Title</label>
                            <input type="text" name="title" class="form-control hudai" aria-describedby="emailHelp"  value="<?=  $view['title']?>">
                            
                            <label class="form-label">Descprition</label>
                            <textarea type="text" name="description" class="form-control" aria-describedby="emailHelp" value="<?=  $view['descprition']?>"><?=  $view['descprition']?></textarea>
                            
                            <picture>
                                <img id="port_image" src="../../public/defualt/defualt.jpg" alt="" style="width:100%; height: 200px; object-fit:contain;">
                            </picture><br>

                            <label class="form-label">Image</label>
                            <input onchange="document.getElementById('port_image').src =window.URL.createObjectURL(this.files[0]) " type="file" name="image" class="form-control hudai" aria-describedby="emailHelp" value="<?=  $view['image']?>">
                           

                            <button type="submit" name="update" class="btn btn-outline-success m-b-xs my-2">Save</button>
                        </div>
                    </form> 
                </div>
                
            </div>
        </div>

    </div>



<?php 
    include "../master/footer.php";

?>