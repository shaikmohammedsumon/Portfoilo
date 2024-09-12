<?php 

    include '../master/header.php';
    require '../../config/config.php';
?>
        <div class="row">
            <div class="col">
                <div class="page-description">
                        <h1>Update profile</h1>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-7">
                <div class="card">
                    <div class="card-header">
                        Update Profile
                        <form action="update.php" method="POST">
                        <div class="card-body">
                            <div class="example-content">
                                <?php if(isset($_SESSION['name_update'])) : ?>
                                <div id="emailHelp" class="form-text text-success"><?= $_SESSION['name_update'] ?></div>    
                                <?php endif; unset($_SESSION['name_update']) ?>
                                <label for="exampleInputEmail1" class="form-label">User Name</label>
                                <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                <button type="submit" name="submit" class="btn btn-outline-success m-b-xs my-2">Save</button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-7">
                <div class="card">
                    <div class="card-header">
                        Update Image
                        <form action="update.php" method="POST" enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="example-content">
                                <label for="exampleInputEmail1" class="form-label">Image</label>
                                <input type="file" name="image" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                <button type="submit" name="image_submit" class="btn btn-outline-success m-b-xs my-2">Save</button>
  
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-7">
                <div class="card">
                    <div class="card-header">
                        Update Password
                        <form action="update.php" method="POST">
                        <div class="card-body">
                            <div class="example-content">
                                <?php if(isset($_SESSION['pass_error'])) : ?>
                                <div id="emailHelp" class="form-text text-danger"><?= $_SESSION['pass_error'] ?></div>    
                                <?php endif; unset($_SESSION['pass_error']) ?>

                                <?php if(isset($_SESSION['pass_update'])) : ?>
                                <div id="emailHelp" class="form-text text-success"><?= $_SESSION['pass_update'] ?></div>    
                                <?php endif; unset($_SESSION['pass_update']) ?>

                                <label for="exampleInputEmail1" class="form-label">Old Password</label>
                                <input type="password" name="old_pass" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                <label for="exampleInputEmail1" class="form-label">New Password</label>
                                <input type="password" name="new_Pass" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                <label for="exampleInputEmail1" class="form-label">Confirm Password</label>
                                <input type="password" name="confirm_pass" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                <button type="submit" name="pass_submit" class="btn btn-outline-success m-b-xs my-2">Save</button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>



            

        </div>

<?php 
    include '../master/footer.php';
?>                  