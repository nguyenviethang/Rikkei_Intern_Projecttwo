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
                            <form action="?url=save-add" method="POST" class="form" enctype="multipart/form-data">

                                <h2 class="col-sm-12 mt-2 lead text-center text-primary">Add User</h2>
                                <label>Username: <input type="text" value="<?php echo $row['username']; ?>" name="username"></label><br />
                                <label>Fullname: <input type="text" value="<?php echo $row['fullname']; ?>" name="fullname"></label><br />
                                <label>Password: <input type="text" value="<?php echo $row['password']; ?>" name="password"></label><br />
                                <label>Avatar: <input type="file" value="<?php echo $row['avatar']; ?>" name="avatar"></label><br />

                                <select name="department">
                                    <?php
                                    foreach ($listDepart as $depart) { ?>
                                        <option value="<?php echo $depart['id'] ?>"><?php echo $depart['name'] ?></option>
                                    <?php
                                    } ?>
                                </select> <br />
                                <select name="role">
                                    <?php
                                    foreach ($listRole as $role) { ?>
                                        <option value="<?php echo $role['id'] ?>"><?php echo $role['name'] ?></option>
                                    <?php
                                    } ?>
                                </select>

                                <input type="submit" value="Add" name="add_user">

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
