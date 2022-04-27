<?php
include "Views/layouts/header.php"; ?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div>
        <h2 class="bg-primary text-white mt-4">List of Departments</h2>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <button type="button" class="btn btn-primary mt-2 mb-2 ml-2" style="width:60px"><a href="?url=addDepart" class="text-white text-decoration-none">Add</a> </button>
                    <div class="table-responsive text-center">
                        <table class="table table-striped table-sm">
                            <thead>

                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Department Name</th>
                                    <th scope="col">Function</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($dataDepart as $key => $item) { ?>
                                    <tr>
                                        <td> <?php echo $key  + 1; ?> </td>
                                        <td> <?php echo $item["name"] ?> </td>
                                        <?php  if($_SESSION['role'] == "Admin"){
                                        ?>
                                        <td><a class="btn btn-info" href="?url=editDepart&id=<?php echo $item['id']; ?>">Edit</a> |
                                            <a class="btn btn-danger" href="?url=deleteDepart&id=<?php echo $item['id']; ?>
                                            " onclick="return confirm('Bạn có muốn xoá không?')">Delete</a>
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
