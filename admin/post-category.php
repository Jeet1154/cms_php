<?php
require "./includes/header.php";
?>
<div class="container">
    <div class="row">
        <div class="d-flex justify-content-between align-items-center">
            <h2 class="txt1 text-info text-center my-4">All Category</h2>
            <div class="btn-holder">
                <!-- add new post button if user click on this button a modal will appear -->
                <button class="btn btn-outline-success btn-sm" data-bs-toggle="modal" data-bs-target="#newcategory">Add New Category</button>
            </div>
        </div>
        <div class="col">
            <!-- all post details are available in this table -->
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Sl no.</th>
                            <th>Category Id</th>
                            <th>Category Title</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sl = 1;
                        foreach ($categoryData as $value) {
                        ?>
                            <tr>
                                <td><?= $sl ?></td>
                                <td><?= $value['category_id'] ?></td>
                                <td><?= $value['category_title'] ?></td>
                                <td><?= $value['createdAt'] ?></td>
                                <td><?= $value['updatedAt'] ?></td>
                                <td>
                                    <button class="btn btn btn-outline-info delete-category" data-cid="<?= $value['category_id'] ?>"><i class="fa-solid fa-trash text-danger"></i></button>
                                    <button class="btn btn btn-outline-info update-category" data-bs-toggle="modal" data-bs-target="#editcategory" data-update_cid="<?= $value['category_id'] ?>"><i class="fa-solid fa-pen-to-square text-success"></i></button>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- new category modal -->
<div class="modal" id="newcategory" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title color4">New Category</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST">
                    <div class="mb-3">
                        <label for="" class="form-label">Enter Category Name</label>
                        <input type="text" class="form-control" name="category_title" id="category_title">
                    </div>
                    <button type="submit" class="btn btn-outline-info" name="add_category_btn">Add Category</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Edit category modal -->
<div class="modal modal-lg" id="editcategory" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title color4">Update Category</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST">
                    <div class="mb-3">
                        <label for="" class="form-label">Category ID</label>
                        <input type="text" class="form-control" name="update_category_id" id="update_category_id" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Enter Category Name</label>
                        <input type="text" class="form-control" name="update_category_title" id="update_category_title">
                    </div>
                    <button type="submit" class="btn btn-outline-info" name="update_category" id="update_category">Update Category</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
require "./includes/footer.php";
?>