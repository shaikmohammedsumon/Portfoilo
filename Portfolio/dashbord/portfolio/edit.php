<?php
    include "../master/header.php";
    $id = $_GET['edit_id'];

    $portfolio_read = "SELECT * FROM portfolio WHERE id= $id";
    $portfolios = mysqli_query($conn,$portfolio_read);
    $portfolio = mysqli_fetch_assoc($portfolios);

?>

    <div class="row">
    <div class="col">
        <div class="page-description">
                <h1>Portfolio Edit</h1>
        </div>
    </div>

            <div class="card-body">
                    <form action="store.php?edit_id=<?= $portfolio['id']?>" method="POST" enctype="multipart/form-data">
                        <div class="example-content">
                            <label class="form-label">Title</label>
                            <input type="text" name="title" class="form-control" aria-describedby="emailHelp" value="<?= $portfolio['title']?>">

                            <label class="form-label">Sub Title</label>
                            <input type="subtitle" name="subtitle" class="form-control" aria-describedby="emailHelp" value="<?= $portfolio['subtitle']?>">

                            <label class="form-label">Description</label>
                            <textarea rows="5" type="subtitle" name="description" class="form-control" aria-describedby="emailHelp"><?= $portfolio['description']?></textarea>


                            <picture>
                                <img id="port_image" src="../../public/portfolio/<?= $portfolio['image']?>" alt="" style="width: 100%; height: 300px;margin-top:  20px; object-fit:contain;">
                            </picture><br>

                            <label class="form-label">Image</label>
                            <input onchange="document.getElementById('port_image').src =window.URL.createObjectURL(this.files[0]) " type="file" name="image" class="form-control hudai" aria-describedby="emailHelp">

                           

                            <button type="submit" name="update_port" class="btn btn-outline-success m-b-xs my-2">Save</button>
                        </div>
                    </form> 
                </div>


<?php
    include "../master/footer.php";
?>