<?php 
    require "../master/header.php";

?>        

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>




<?php
    if(isset($_GET['idlink'])){
        $id = $_GET['idlink'];
        if($id = 'link'){

?>
    <div class="row">
    <div class="col">
        <div class="page-description">
                <h1>link</h1>
        </div>
    </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                        Add links
                    <form action="link_manage.php" method="POST">
                        <div class="card-body">
                            <div class="example-content">
                                <label for="exampleInputEmail1" class="form-label">Facebook</label>
                                <input type="text" name="facebook" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                <label for="exampleInputEmail1" class="form-label">Instragram</label>
                                <input type="text" name="instragram" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                <label for="exampleInputEmail1" class="form-label">Twitter</label>
                                <input type="text" name="twitter" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                <label for="exampleInputEmail1" class="form-label">Telegram</label>
                                <input type="text" name="telegram" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                <button type="submit" name="submit" class="btn btn-outline-success m-b-xs my-2">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php
        }}
    ?>



<?php
    if(isset($_GET['idtitlwName'])){
        $id = $_GET['idtitlwName'];
        if($id = 'titlwName'){

?>
    <div class="row">
    <div class="col">
        <div class="page-description">
                <h1>link</h1>
        </div>
    </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h1>Title Name and Description</h1>
                    <form action="link_manage.php" method="POST">
                        <div class="card-body">
                            <div class="example-content">
                                <label for="exampleInputEmail1" class="form-label">WellCome Message</label>
                                <input type="text" name="wellcome" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                <label for="exampleInputEmail1" class="form-label">Title Name</label>
                                <input type="text" name="title_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                <label for="exampleInputEmail1" class="form-label">Description</label>
                                <input type="text" name="description" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                
                                <button type="submit" name="link_tnd" class="btn btn-outline-success m-b-xs my-2">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php
        }}
    ?>





<?php 
    require "../master/footer.php";

?>