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
                    <form action="store.php" method="POST" enctype="multipart/form-data">
                        <div class="example-content">
                           
                            <label class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" aria-describedby="emailHelp">

                            <label class="form-label">Title</label>
                            <input type="text" name="title" class="form-control" aria-describedby="emailHelp">

                            <label class="form-label">Description</label>
                            <textarea type="text" name="description" class="form-control hudai" aria-describedby="emailHelp" row="8"></textarea>

                            <picture>
                                <img id="port_image" src="../../public/defualt/defualt.jpg" alt="" style="width:100%; height: 200px; object-fit:contain;">
                            </picture><br>

                            <label class="form-label">Image</label>
                            <input onchange="document.getElementById('port_image').src =window.URL.createObjectURL(this.files[0]) " type="file" name="image" class="form-control hudai" aria-describedby="emailHelp">
                           

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


