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
                        <tr>
                            <td>1</td>
                            <td>101</td>
                            <td>Lorem ipsum dolor sit amet.</td>
                            <td><img src="https://www.thoughtco.com/thmb/094YF3bQBiuV_13n92GFQZWkM7k=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/JavaScript-58acbb8a3df78c345bad32c2.jpg" alt="" class="w-100" height="30px" width="50px"></td>
                            <td>Technology</td>
                            <td>Published</td>
                            <td>26-07-1999</td>
                            <td>26-07-1999</td>
                            <td>
                                <button class="btn btn btn-outline-info"><i class="fa-solid fa-trash text-danger"></i></button>
                                <button class="btn btn btn-outline-info" data-bs-toggle="modal" data-bs-target="#editpost"><i class="fa-solid fa-pen-to-square text-success"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>101</td>
                            <td>Lorem ipsum dolor sit amet.</td>
                            <td><img src="https://www.thoughtco.com/thmb/094YF3bQBiuV_13n92GFQZWkM7k=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/JavaScript-58acbb8a3df78c345bad32c2.jpg" alt="" class="w-100" height="30px" width="50px"></td>
                            <td>Technology</td>
                            <td>Published</td>
                            <td>26-07-1999</td>
                            <td>26-07-1999</td>
                            <td>
                                <button class="btn btn btn-outline-info"><i class="fa-solid fa-trash text-danger"></i></button>
                                <button class="btn btn btn-outline-info"><i class="fa-solid fa-pen-to-square text-success"></i></button>
                            </td>
                        </tr>

                        <tr>
                            <td>1</td>
                            <td>101</td>
                            <td>Lorem ipsum dolor sit amet.</td>
                            <td><img src="https://www.thoughtco.com/thmb/094YF3bQBiuV_13n92GFQZWkM7k=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/JavaScript-58acbb8a3df78c345bad32c2.jpg" alt="" class="w-100" height="30px" width="50px"></td>
                            <td>Technology</td>
                            <td>Published</td>
                            <td>26-07-1999</td>
                            <td>26-07-1999</td>
                            <td>
                                <button class="btn btn btn-outline-info"><i class="fa-solid fa-trash text-danger"></i></button>
                                <button class="btn btn btn-outline-info" data-bs-toggle="modal" data-bs-target="#editpost"><i class="fa-solid fa-pen-to-square text-success"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>101</td>
                            <td>Lorem ipsum dolor sit amet.</td>
                            <td><img src="https://www.thoughtco.com/thmb/094YF3bQBiuV_13n92GFQZWkM7k=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/JavaScript-58acbb8a3df78c345bad32c2.jpg" alt="" class="w-100" height="30px" width="50px"></td>
                            <td>Technology</td>
                            <td>Published</td>
                            <td>26-07-1999</td>
                            <td>26-07-1999</td>
                            <td>
                                <button class="btn btn btn-outline-info"><i class="fa-solid fa-trash text-danger"></i></button>
                                <button class="btn btn btn-outline-info"><i class="fa-solid fa-pen-to-square text-success"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>101</td>
                            <td>Lorem ipsum dolor sit amet.</td>
                            <td><img src="https://www.thoughtco.com/thmb/094YF3bQBiuV_13n92GFQZWkM7k=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/JavaScript-58acbb8a3df78c345bad32c2.jpg" alt="" class="w-100" height="30px" width="50px"></td>
                            <td>Technology</td>
                            <td>Published</td>
                            <td>26-07-1999</td>
                            <td>26-07-1999</td>
                            <td>
                                <button class="btn btn btn-outline-info"><i class="fa-solid fa-trash text-danger"></i></button>
                                <button class="btn btn btn-outline-info"><i class="fa-solid fa-pen-to-square text-success"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>101</td>
                            <td>Lorem ipsum dolor sit amet.</td>
                            <td><img src="https://www.thoughtco.com/thmb/094YF3bQBiuV_13n92GFQZWkM7k=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/JavaScript-58acbb8a3df78c345bad32c2.jpg" alt="" class="w-100" height="30px" width="50px"></td>
                            <td>Technology</td>
                            <td>Published</td>
                            <td>26-07-1999</td>
                            <td>26-07-1999</td>
                            <td>
                                <button class="btn btn btn-outline-info"><i class="fa-solid fa-trash text-danger"></i></button>
                                <button class="btn btn btn-outline-info"><i class="fa-solid fa-pen-to-square text-success"></i></button>
                            </td>
                        </tr>
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
                <form>
                    <div class="mb-3">
                        <label for="" class="form-label">Select Category</label>
                        <select class="form-select">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Enter Post Title</label>
                        <input type="text" class="form-control" id="">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Upload Picture</label>
                        <input type="file" class="form-control" id="">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Post Description</label>
                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Select Post Status</label>
                        <select class="form-select">
                            <option selected>Open this select menu</option>
                            <option value="draft">Draft</option>
                            <option value="published">Published</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-outline-info">Add Post</button>
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
                <form>
                    <div class="mb-3">
                        <label for="" class="form-label">Select Category</label>
                        <select class="form-select">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Enter Post Title</label>
                        <input type="text" class="form-control" id="">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Upload Picture</label>
                        <input type="file" class="form-control" id="">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Post Description</label>
                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Select Post Status</label>
                        <select class="form-select">
                            <option selected>Open this select menu</option>
                            <option value="draft">Draft</option>
                            <option value="published">Published</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-outline-info">Add Post</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
require "./includes/footer.php";
?>