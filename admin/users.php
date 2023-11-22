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
                        <tr>
                            <td>1</td>
                            <td>101</td>
                            <td>Jeet Sil</td>
                            <td>jeetsil@gmail.com</td>
                            <td><img src="https://www.thoughtco.com/thmb/094YF3bQBiuV_13n92GFQZWkM7k=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/JavaScript-58acbb8a3df78c345bad32c2.jpg" alt="" class="w-40" height="50px" width="40px"></td>
                            <td>26-07-1999</td>
                            <td>26-07-1999</td>
                            <!-- <td>
                                <button class="btn btn btn-outline-info"><i class="fa-solid fa-trash text-danger"></i></button>
                                <button class="btn btn btn-outline-info" data-bs-toggle="modal" data-bs-target="#editpost"><i class="fa-solid fa-pen-to-square text-success"></i></button>
                            </td> -->
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
<?php
    require "./includes/footer.php";
?>