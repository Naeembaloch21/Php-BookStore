<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Store</title>
    <link rel="icon" href="Assets/img/3.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <header>
        <div class="container-fluid mt-5 ">
            <div class="row">
                <div class="col-md-4 ">
                    <a href="added.html">
                        <i class="fa fa-shopping-cart pe-3 fs-4 text-success" aria-hidden="true"></i>
                    </a>
                </div>
                <div class="col-md-4">
                    <img class="mx-auto d-block" src="Assets/images/logo_png (1).webp" style="width: 49.5%;" alt="">
                </div>
                <div class="col-md-4  text-end">
                    <div class="dropdown pe-3">
                        <button class="btn btn-danger me-3 dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            US
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="#">AF</a></li>
                            <li><a class="dropdown-item" href="#">AX</a></li>
                            <li><a class="dropdown-item" href="#">AL</a></li>
                        </ul>
                        <a href="login.html"><i class="fa fa-user fs-4 pe-3 cursor-pointer text-success" aria-hidden="true"></i></a>
                        <i class="fa fa-search fs-4 pe-3 text-success" aria-hidden="true"></i>
                    </div>
                </div>

            </div>
        </div>
    </header>

    <?php include('navbar.php') ?>