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
                            <th>CategoryIid</th>
                            <th>Category Name</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>101</td>
                            <td>Lorem ipsum dolor sit amet.</td>
                            <td>26-07-1999</td>
                            <td>26-07-1999</td>
                            <td>
                                <button class="btn btn btn-outline-info"><i class="fa-solid fa-trash text-danger"></i></button>
                                <button class="btn btn btn-outline-info" data-bs-toggle="modal" data-bs-target="#editcategory"><i class="fa-solid fa-pen-to-square text-success"></i></button>
                            </td>
                        </tr>
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
                <form>
                    <div class="mb-3">
                        <label for="" class="form-label">Enter Category Name</label>
                        <input type="text" class="form-control" id="">
                    </div>
                    <button type="submit" class="btn btn-outline-info">Update Category</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
    require "./includes/footer.php";
?>