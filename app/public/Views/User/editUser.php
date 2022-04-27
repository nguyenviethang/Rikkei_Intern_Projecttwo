<?php
include "Views/layouts/header.php"; ?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div>
        <h2 class="bg-primary text-white mt-4">List of User</h2>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="table-responsive text-center">
                        <table class="table table-striped table-sm">
                            <form action="?url=save-update" method="POST" class="form" enctype="multipart/form-data">

                                <h2 class="col-sm-12 mt-2 lead text-center text-primary" >Edit User</h2>
                                <input type="hidden" value="<?php echo $dataUser['id']; ?>" name="id">
                                <label>Avatar: <input type="file" value="<?php echo $dataUser['avatar']; ?>" name="avatar"></label><br />
                                <label>Username: <input type="text" value="<?php echo $dataUser['username']; ?>" name="username"></label><br />
                                <label>Fullname: <input type="text" value="<?php echo $dataUser['fullname']; ?>" name="fullname"></label><br />
                                <label>Password: <input type="text" value="<?php echo $dataUser['password']; ?>" name="password"></label><br />
                                <input type="submit" value="Update" name="update_user">

                            </form>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php
include "Views/layouts/footer.php";
