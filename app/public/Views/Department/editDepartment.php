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
                    <div class="table-responsive text-center">
                        <table class="table table-striped table-sm">
                            <form action="?url=save-updateDepart" method="POST" class="form">

                                <h2 class="col-sm-12 mt-2 lead text-center text-primary">Edit Department </h2>
                                <input type="hidden" value="<?php echo $dataDepart['id']; ?>" name="id">
                                <label>Name: <input type="text" value="<?php echo $dataDepart['name']; ?>" name="name"></label><br />
                                <input type="submit" value="Update" name="update_depart">
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
