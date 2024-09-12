<?php 
    include "../master/header.php";
    include "../../config/config.php";
    $links = "SELECT * FROM links";
    $regult = mysqli_query($conn,$links);

    $link_tnd = "SELECT * FROM link_tnd";
    $regultlink_tnd = mysqli_query($conn,$link_tnd);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div class="row">
    <div class="col">
        <div class="page-description">
                <h1>Education</h1>
        </div>
    </div>
    </div>

    <section class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                
                    
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h4>Title Name and Description</h4>
                        <a href="create.php?idtitlwName=titlwName" type="submit" name="submit" class="btn btn-outline-success m-b-xs my-2">Created</a>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead class="table-derk">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">WellCome</th>
                                    <th scope="col">Name Title</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $num = 1;
                                    foreach($regultlink_tnd as $regults):
                                ?>
                                <tr>
                                <td><?= $num ++;?></td>
                                <th scope="col"><?= $regults['wellcome']?></th>
                                <th scope="col"><?= $regults['name']?></th>
                                <th scope="col"><?= substr($regults['description'],0,20)?>..</th>
                                
                                <td><a href="link_manage.php?status_idtnd=<?= $regults['id'];?>" class="<?= ($regults['status'] == 'deactive') ? 'badge bg-danger text-white':'badge bg-success text-white' ?>"><?= $regults['status'];?></a></td>
                                <td class="d-flex justify-content-around">
                                <a href="link_manage.php?delete_idtnd=<?= $regults['id'];?>"><i class="fa fa-trash-o text-danger fa-2x"></i></a>
                                </td>
                                
                                </tr> 
                                <?php endforeach;?>       
                            </tbody>
                     </table>
                                
                   
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                    <h4>Social Media Link</h4>
                    <a href="create.php?idlink=link" type="submit" name="submit" class="btn btn-outline-success m-b-xs my-2">Created</a>
                    </div>

                    <table class="table">
                        <thead class="table-derk">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Facebook</th>
                                <th scope="col">Twitter</th>
                                <th scope="col">Instragram</th>
                                <th scope="col">Telegram</th>
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
                            <th scope="col"><?= substr($regults['facebook'],0,20)?>..</th>
                            <th scope="col"><?= substr($regults['instragram'],0,20)?>..</th>
                            <th scope="col"><?= substr($regults['twitter'],0,20)?>..</th>
                            <th scope="col"><?= substr($regults['telegram'],0,20)?>..</th>
                            <td><a href="link_manage.php?status_id=<?= $regults['id'];?>" class="<?= ($regults['status'] == 'deactive') ? 'badge bg-danger text-white':'badge bg-success text-white' ?>"><?= $regults['status'];?></a></td>
                            <td class="d-flex justify-content-around">
                            <a href="link_manage.php?delete_id=<?= $regults['id'];?>"><i class="fa fa-trash-o text-danger fa-2x"></i></a>
                            </td>
                        
                        </tr> 
                        <?php endforeach;?>       
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>

    
</body>
</html>
<?php 
    include "../master/footer.php";
?>