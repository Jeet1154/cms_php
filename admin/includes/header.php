<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- fontawesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- custom css link -->
    <link rel="stylesheet" href="../css/style.css">
</head>
<title>Blog-<?= $title; ?></title>
</head>

<body>
    <div class="container-fluid p-0 sticky-top">
        <nav class="navbar navbar-expand-lg bg1">
            <div class="container-fluid">
                <a class="txt1 navbar-brand" href="dashboard.php">Admin Name</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item btn btn-sm btn-outline-info m-1">
                            <a class="txt1 color nav-link " href="admin-posts.php">Posts</a>
                        </li>
                        <li class="nav-item btn btn-sm btn-outline-primary  m-1">
                            <a class="txt1 color nav-link" href="post-category.php">Categories</a>
                        </li>
                        <li class="nav-item btn btn-sm btn-outline-success m-1">
                            <a class="txt1 color nav-link" href="comments.php">Comments</a>
                        </li>
                        <li class="nav-item btn btn-sm btn-outline-danger m-1">
                            <a class="txt1 color nav-link" href="users.php">Users</a>
                        </li>
                        <li class="nav-item btn btn-sm btn-outline-warning m-1">
                            <a class="txt1 color nav-link" href="dashboard.php">Profile</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>