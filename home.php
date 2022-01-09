<?php

use Helpers\Auth;

include('vendor/autoload.php');

$user = Auth::check();

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
    </style>
</head>

<body>
    <div>
        <div class="row g-0">
            <!-- side menu -->
            <div class="col-2 bg-primary">
                <h1 class="h4 py-3 text-center text-light">Lost & Found</h1>
                <div class="list-group text-start px-2">
                    <span class="list-group-item disabled">
                        <small>Menu</small>
                    </span>
                    <a href="" class="list-group-item list-group-item-action text-start">
                        <span style="font-size: 25px; color:dodgerblue">
                            <img src="_assets/icons/found-item.png" alt="found-item-icon" width="25px">
                        </span>
                        <span>Found-items</span>
                        <span class="badge bg-danger rounded-pill">99+</span>
                    </a>
                    <a href="" class="list-group-item list-group-item-action">
                        <span style="font-size: 25px; color:dodgerblue">
                            <img src="_assets/icons/lost-item.png" alt="found-item-icon" width="25px">
                        </span>
                        <span>Lost-items</span>
                    </a>
                    <a href="" class="list-group-item list-group-item-action">
                        <span style="font-size: 25px; color:dodgerblue"><i class="fas fa-list-alt"></i></span>
                        <span>Your Items</span>
                    </a>
                    <!-- <a href="" class="list-group-item list-group-item-action"></a> -->
                </div>
            </div>
            <div class="col-10 px-3 bg-light">
                <!-- header -->
                <div class="d-flex justify-content-between align-items-center py-3">
                    <h1 class="h4 d-inline-block">Found Items</h1>
                    <span>
                        <input type="text" class="search" placeholder="Search Item">
                        <!-- <a href="" class="btn btn-outline-light"><i class="fa fa-user-alt me-2"></i>profile</a> -->
                        <div class="dropdown d-inline-block ms-2">
                            <a class="btn btn-outline-primary dropdown-toggle" data-bs-toggle="dropdown" href="">
                                <i class="fa fa-user-circle me-2"></i>
                            </a>

                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="profile.php">User Profile</a></li>
                                <li><a class="dropdown-item" href="_actions/logout.php">Logout</a></li>
                            </ul>
                        </div>
                    </span>
                </div>
                <!-- sub-header -->
                <div class="row g-0 my-2 d-flex justify-content-center align-items-center pb-3">
                    <div class="col-4">
                        <a class="btn btn-sm w-100 btn-outline-primary text-center">On Road</a>
                    </div>
                    <div class="col-4">
                        <a class="btn btn-sm w-100 btn-outline-primary text-center">On Bus or Taxi</a>
                    </div>
                    <div class="col-4 text-end">
                        <a class="btn btn-sm btn-primary" href="new_found_item.php">+ Report Found Item</a>
                    </div>
                </div>

                <!-- Body -->
                <div class="row g-2 pb-3">
                    <div class="col-3">
                        <div class="card shadow">
                            <img src="https://i.pinimg.com/564x/a2/5a/f4/a25af4b59a763a26eb4c9cba89448301.jpg" alt="" style="height: 200px; object-fit:cover">
                            <div class="card-body">
                                <h5 class="card-title">ပန်းရောင် ပိုက်ဆံအိတ်</h5>
                                <!-- <h5 class="card-subtitle mb-2 text-muted">Contact Info</h5> -->
                                <h6 class="text-muted">Name - Thaw Thu Han</h6>
                                <h6 class="text-muted">Phone - 09xxxxxxx</h6>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a class="card-link" href="">see more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card shadow">
                            <img src="https://5.imimg.com/data5/KD/QK/UP/SELLER-19208624/office-plastic-id-card-500x500.jpg " alt="" style="height: 200px; object-fit:cover">
                            <div class="card-body">
                                <h5 class="card-title">မှတ်ပုံတင်</h5>
                                <!-- <h5 class="card-subtitle mb-2 text-muted">Contact Info</h5> -->
                                <h6 class="text-muted">Name - Thaw Thu Han</h6>
                                <h6 class="text-muted">Phone - 09xxxxxxx</h6>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a class="card-link" href="">see more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card shadow">
                            <img class="" src="https://images.hindustantimes.com/tech/img/2021/10/27/960x540/mobile-3784238_1920_1635311367096_1635317382740.jpg" alt="" style="height: 200px; object-fit:cover">
                            <div class="card-body">
                                <h5 class="card-title">IPhone-7 plus</h5>
                                <!-- <h5 class="card-subtitle mb-2 text-muted">Contact Info</h5> -->
                                <h6 class="text-muted">Name - Thaw Thu Han</h6>
                                <h6 class="text-muted">Phone - 09xxxxxxx</h6>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a class="card-link" href="">see more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card shadow">
                            <img class="h-50" src="https://img.jakpost.net/c/2017/10/27/2017_10_27_34812_1509078697._large.jpg" alt="">
                            <div class="card-body">
                                <h5 class="card-title">Name - Thaw Thu Han</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Phone - 09xxxxxxxx</h6>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="">see more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card shadow">
                            <img src="https://trendblog.net/wp-content/uploads/2020/01/photo-1578671999517-728f26ce77fc-2-e1613417860321.jpeg" alt="">
                            <div class="card-body">
                                <h5 class="card-title">Name - Thaw Thu Han</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Phone - 09xxxxxxxx</h6>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="">see more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card shadow">
                            <img src="https://cdn5.vectorstock.com/i/1000x1000/53/64/car-driver-licence-card-vector-16395364.jpg" alt="">
                            <div class="card-body">
                                <h5 class="card-title">Name - Thaw Thu Han</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Phone - 09xxxxxxxx</h6>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="">see more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card shadow">
                            <img class="h-50" src="https://previews.123rf.com/images/pongphoto9/pongphoto91802/pongphoto9180200129/95075534-black-leather-wallet-drop-on-the-road-concept-missing-or-lost-a-pocket.jpg" alt="">
                            <div class="card-body">
                                <h5 class="card-title">Name - Thaw Thu Han</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Phone - 09xxxxxxxx</h6>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="">see more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card shadow">
                            <img class="h-50" src="https://i.pinimg.com/originals/26/c9/f7/26c9f7950d114df317fecf23c053055d.jpg" alt="">
                            <div class="card-body">
                                <h5 class="card-title">Name - Thaw Thu Han</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Phone - 09xxxxxxxx</h6>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="">see more</a>
                            </div>
                        </div>
                    </div>
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