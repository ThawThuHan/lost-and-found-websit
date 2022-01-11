<?php

use Helpers\Auth;
use Libs\Database\Found_Item_Table;
use Libs\Database\MySQL;

include('vendor/autoload.php');

$user = Auth::check();

$table = new Found_Item_Table(new MySQL());
if ($table) {
    $all = $table->getAll();
} else {
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <style>
        .search {
            border: 1px solid grey;
            border-radius: 20px;
            padding-left: 10px;
            padding-top: 5px;
            padding-bottom: 5px;
            /* height: 100%; */
        }

        .search:focus {
            border: none;
            outline: none;
        }

        @media (max-width: 400px) {
            .list-group-item {
                padding-left: 0;
                padding-right: 0;
                text-align: center;
            }

            #report_found_item {
                width: 100%;
            }
        }
    </style>
</head>

<body>
    <div>
        <div class="row g-0">
            <!-- side menu -->
            <div class="col-2 bg-primary">
                <div class="sticky-top">
                    <h1 class="h4 py-3 text-center text-light">Lost & Found</h1>
                    <div class="list-group text-start px-2 ">
                        <span class="list-group-item disabled ">
                            <small class="d-none d-md-inline">Menu</small>
                        </span>
                        <a href="" class="list-group-item list-group-item-action text-md-start">
                            <span style="font-size: 25px; color:dodgerblue">
                                <img src="_assets/icons/found-item.png" alt="found-item-icon" width="25px">
                            </span>
                            <span class="d-none d-md-inline">Found-items</span>
                            <span class="badge bg-danger rounded-pill d-none d-md-inline">99+</span>
                        </a>
                        <a href="" class="list-group-item list-group-item-action">
                            <span style="font-size: 25px; color:dodgerblue">
                                <img src="_assets/icons/lost-item.png" alt="found-item-icon" width="25px">
                            </span>
                            <span class="d-none d-md-inline">Lost-items</span>
                        </a>
                        <a href="" class="list-group-item list-group-item-action">
                            <span style="font-size: 25px; color:dodgerblue"><i class="fas fa-list-alt"></i></span>
                            <span class="d-none d-md-inline">Your Items</span>
                        </a>
                    </div>

                    <div class="list-group px-2 mt-2">
                        <a class="list-group-item" href="profile.php">
                            <i class="fa fa-user"></i>
                            <span class="d-none d-md-inline">User Profile</span>
                        </a>
                        <a class="list-group-item" href="_actions/logout.php">
                            <i class="fa fa-sign-out-alt"></i>
                            <span class="d-none d-md-inline">Logout</span></a>
                    </div>
                </div>
            </div>
            <div class="col-10 px-3 bg-light">
                <!-- header -->
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">Founded Items</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <form class="d-flex ms-auto mt-2 mt-lg-0">
                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-primary" type="submit">Search</button>
                            </form>
                        </div>
                    </div>
                </nav>

                <!-- sub-header -->
                <div class="row g-1 g-md-0 my-2 d-flex justify-content-center align-items-center pb-3">
                    <div class="col-6 col-md-4">
                        <a class="btn btn-sm w-100 btn-outline-primary text-center">On Road</a>
                    </div>
                    <div class="col-6 col-md-4">
                        <a class="btn btn-sm w-100 btn-outline-primary text-center">On Bus or Taxi</a>
                    </div>
                    <div class="col-12 col-md-4 text-end">
                        <a id="report_found_item" class="btn btn-sm btn-primary" href="new_found_item.php">+ Report Found Item</a>
                    </div>
                </div>

                <!-- Body -->
                <div class="row g-2 pb-3">
                    <?php foreach ($all as $found_item) : ?>
                        <?php
                        $images = explode(", ", $found_item->images);
                        $description = strlen($found_item->description) > 201 ? substr($found_item->description, 0, 201) . "...." : $found_item->description;
                        ?>
                        <div class="col-12 col-md-6 col-lg-3">
                            <div class="card shadow">
                                <img src="found_item_images/<?= $images[0] ?>" alt="" style="height: 200px; object-fit:cover">
                                <div class="card-body">
                                    <h5 class="card-title h6"><b><?= $found_item->item_name ?></b></h5>
                                    <h6 class="text-muted">Name - <?= $found_item->name ?></h6>
                                    <h6 class="text-muted">Phone - <?= $found_item->phone ?></h6>
                                    <p class="card-text"><?= $description ?></p>
                                    <a class="card-link" href="">see more</a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>

    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>

<!-- <div>
    Icons made by
    <a href="https://www.flaticon.com/authors/eucalyp" title="Eucalyp">Eucalyp</a>
    from
    <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a>
</div> -->

<!-- <div>
    Icons made by 
    <a href="https://www.freepik.com" title="Freepik">Freepik</a> 
    from 
    <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a>
</div> -->