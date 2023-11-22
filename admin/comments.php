<?php
    require "./includes/header.php";
?>
<div class="container">
    <div class="row">
        <div class="d-flex justify-content-between align-items-center">
            <h2 class="txt1 text-info text-center my-4">All Comments</h2>
        </div>
        <div class="col">
            <!-- all post details are available in this table -->
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Sl no.</th>
                            <th>Comment Id</th>
                            <th>Comment</th>
                            <th>Comment Status</th>
                            <th>User Name</th>
                            <th>User Email</th>
                            <th>Related Post</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>101</td>
                            <td>Lorem ipsum dolor sit amet. Lorem, ipsum dolor sit amet consectetur adipisicing elit...</td>
                            <td>Approved</td>
                            <td>Jeet Sil</td>
                            <td>jeetsil@gmail.com</td>
                            <td>post title</td>
                            <td>26-07-1999</td>
                            <td>26-07-1999</td>
                            <td>
                                <div class="button-holder d-flex">
                                <button class="btn btn btn-outline-success m-1"data-bs-toggle="modal" data-bs-target="#showcomment"><i class="fa-regular fa-eye"></i></i></button>
                                <button class="btn btn btn-outline-success m-1" data-bs-toggle="modal" data-bs-target="#editcommentstatus"><i class="fa-solid fa-pen-to-square"></i></button>
                                <button class="btn btn btn-outline-success m-1"><i class="fa-solid fa-trash text-danger"></i></button>
                                </div>
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
<!-- Show Comments modal -->
<div class="modal modal-lg" id="showcomment" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
                <h5 class="modal-title color4">Comment</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam saepe quis dolores sunt maxime blanditiis beatae cupiditate numquam eveniet quibusdam?</p>
            </div>
        </div>
    </div>
</div>
<!-- Edit Comments modal -->
<div class="modal modal-lg" id="editcommentstatus" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
                <h5 class="modal-title color4">Update Comment Status</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="" class="form-label">Status</label>
                        <select class="form-select">
                            <option selected>Select Status</option>
                            <option value="1">Approved</option>
                            <option value="2">Unapproved</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-outline-info">Update Comment</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
    require "./includes/footer.php";
?>