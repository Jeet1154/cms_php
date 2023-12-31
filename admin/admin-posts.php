<?php
require "./includes/header.php";
?>
<div class="container">
    <div class="row">
        <div class="d-flex justify-content-between align-items-center">
            <h2 class="txt1 text-info text-center my-4">All Posts</h2>
            <div class="btn-holder">
                <!-- add new post button if user click on this button a modal will appear -->
                <button class="btn btn-outline-success btn-sm" data-bs-toggle="modal" data-bs-target="#newpost">Add New Posts</button>
            </div>
        </div>
        <div class="col">
            <!-- all post details are available in this table -->
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Sl no.</th>
                            <th>Post Id</th>
                            <th>Post Title</th>
                            <th>Post Image</th>
                            <th>Post Category</th>
                            <th>Post Status</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $psl = 1;
                        if ($postsData != null) {
                            foreach ($postsData as $value) {
                        ?>
                                <tr>
                                    <td><?= $psl ?></td>
                                    <td><?= $value['post_id']; ?></td>
                                    <td><?= $value['post_title']; ?></td>
                                    <td><img src="../<?= $value['post_img']; ?>" alt="" class="w-100" height="30px" width="50px"></td>
                                    <td><?= $value['category_title']; ?></td>
                                    <td><?= $value['post_status']; ?></td>
                                    <td><?= $value['createdAt']; ?></td>
                                    <td><?= $value['updatedAt']; ?></td>
                                    <td class="d-flex">
                                        <button class="btn btn btn-outline-info m-1 delete-post-btn" data-pid=<?= $value['post_id']; ?>><i class="fa-solid fa-trash text-danger"></i></button>
                                        <button class="btn btn btn-outline-info m-1 edit-post-btn" data-bs-toggle="modal" data-bs-target="#editpost" data-pid="<?= $value['post_id']; ?>"><i class="fa-solid fa-pen-to-square text-success"></i></button>
                                    </td>
                                </tr>
                        <?php
                            }
                        }
                        ?>

                    </tbody>
                </table>
            </div>
            <!-- pagination -->
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>
<!-- new post modal -->
<div class="modal modal-lg" id="newpost" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title color4">New Post</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="" class="form-label">Select Category</label>
                        <select class="form-select" name="post_category" id="post_category">
                            <option value="" selected>Open this select menu</option>
                            <?php
                            foreach ($categoryData as $value) {
                            ?>
                                <option value="<?= $value['category_id']; ?>"><?= $value['category_title']; ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Enter Post Title</label>
                        <input type="text" class="form-control" name="post_title" id="post_title">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Upload Picture</label>
                        <input type="file" class="form-control" name="post_img" id="post_img">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Post Description</label>
                        <textarea class="form-control" placeholder="Write Something..." name="post_descrption" id="post_descrption" style="height: 100px"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Select Post Status</label>
                        <select class="form-select" name="post_status" id="post_status">
                            <option value="" selected>Open this select menu</option>
                            <option value="draft">Draft</option>
                            <option value="published">Published</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-outline-info" name="add_post" id="add_post">Add Post</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Edit post modal -->
<div class="modal modal-lg" id="editpost" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title color4">Edit Post</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="" class="form-label">Post ID (Unchangable)</label>
                        <input type="text" class="form-control" name="update_post_id" id="update_post_id" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Post Category (Unchangable)</label>
                        <input type="text" class="form-control" name="update_post_category" id="update_post_category" readonly>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Enter Post Title</label>
                        <input type="text" class="form-control" name="update_post_title" id="update_post_title">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Upload Picture</label>
                        <input type="file" class="form-control" name="update_post_img" id="update_post_img">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Post Description</label>
                        <textarea class="form-control" placeholder="Please write something..." style="height: 100px" name="update_post_desc" id="update_post_desc"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Select Post Status</label>
                        <select class="form-select" name="update_post_status" id="update_post_status">
                            <option selected>Open this select menu</option>
                            <option value="draft">Draft</option>
                            <option value="published">Published</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-outline-info" name="update_post_btn" id="update_post_btn">Update Post</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
require "./includes/footer.php";
?>