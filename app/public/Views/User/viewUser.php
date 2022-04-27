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
                    <button type="button" class="btn btn-primary mt-2 mb-2 ml-2" style="width:60px"><a href="?url=addUser" 
                    class="text-white text-decoration-none">Add</a> </button>
                    <div class="table-responsive text-center">
                        <table class="table table-striped table-sm">
                            <thead>
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Avatar</th>
                                    <th scope="col">Fullname</th>
                                    <th scope="col">Username</th>
                                    <th scope="col">Department name</th>
                                    <th scope="col">Role name</th>
                                    <th scope="col">Function</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($dataUser as $key => $item) {
                                ?>
                                    <tr>
                                        <td> <?php echo $key  + 1; ?> </td>
                                        <td> <img src="Library/Uploads/<?php echo $item['avatar'] ?>" alt="" width="300" height="300"> </td>
                                        <td> <?php echo $item["fullname"] ?> </td>
                                        <td> <?php echo $item["username"] ?> </td>
                                        <td> <?php echo $item["department_name"] ?> </td>
                                        <td> <?php echo $item["role_name"] ?> </td>
                                        <!-- an giao dien -->
                                        <?php if ($_SESSION['role'] == "Admin") {
                                        ?>

                                            <td><a class="btn btn-info" href="?url=editUser&id=<?php echo $item['id']; ?>">Edit</a> |
                                                <?php if ($_SESSION['username'] != $item['username']) { ?>
                                                    <a class="btn btn-danger" href="?url=deleteUser&id=<?php echo $item['id']; ?>
                                                    " onclick="return confirm('Bạn có muốn xoá không?')">Delete</a>
                                                <?php } ?>
                                            </td>

                                        <?php  }
                                        ?>
                                    </tr>

                                <?php  } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php
include "Views/layouts/footer.php";
