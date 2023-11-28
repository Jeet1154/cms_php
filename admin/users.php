<?php
require "./includes/header.php";
?>
<div class="container">
    <div class="row">
        <div class="d-flex justify-content-between align-items-center">
            <h2 class="txt1 text-info text-center my-4">All Users</h2>
        </div>
        <div class="col">
            <!-- all post details are available in this table -->
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Sl no.</th>
                            <th>User Id</th>
                            <th>User Name</th>
                            <th>User Email</th>
                            <th>User Image</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if ($allUserData != null) {
                            $usl = 1;
                            foreach ($allUserData as $value) {
                        ?>
                            <tr>
                                <td><?= $usl ?></td>
                                <td><?= $value['user_id']; ?></td>
                                <td><?= $value['user_name']; ?></td>
                                <td><?= $value['user_email']; ?></td>
                                <td><img src="../<?= $value['user_pic']; ?>" alt="" class="w-40" height="50px" width="40px"></td>
                                <td><?= $value['createdAt']; ?></td>
                                <td><?= $value['updatedAt']; ?></td>
                                <!-- <td>
                                <button class="btn btn btn-outline-info"><i class="fa-solid fa-trash text-danger"></i></button>
                                <button class="btn btn btn-outline-info" data-bs-toggle="modal" data-bs-target="#editpost"><i class="fa-solid fa-pen-to-square text-success"></i></button>
                            </td> -->
                            </tr>
                        <?php
                        }}
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
<?php
require "./includes/footer.php";
?>