<?php

include "vendor/autoload.php";

use Helpers\Auth;

$user = Auth::check();

// var_dump($user);
$user_id = $user->id;
$name = $user->name;
$email = $user->email;
$password = $user->password;
$phone = $user->phone;
$address = $user->address;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>

    <div class="container mt-5">
        <span><a href="home.php">
                <--- go back </a></span>
        <h1>Edit Your Information</h1>
        <?php if (isset($_GET['success']) && $_GET["success"] === "true") : ?>
            <div class="alert alert-success">Update!</div>
        <?php elseif (isset($_GET['success']) && $_GET["success"] === "false") : ?>
            <div class="alert alert-danger">Something Wrong! Try Again.</div>
        <?php endif; ?>
        <form action="_actions/update_profile.php" method="POST">
            <div class="my-3">
                <div class="input-group mb-3">
                    <span class="input-group-text">Name</span>
                    <input class="form-control" type="text" name="name" id="" value="<?= $name ?>" required>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Email</span>
                    <input class="form-control" type="email" name="email" id="" value="<?= $email ?>" required>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Phone</span>
                    <input class="form-control" type="text" name="phone" id="" placeholder="09 xxx-xxx-xxx" value="<?= $phone ?>">
                </div>
                <div class="input-group">
                    <span class="input-group-text">Address</span>
                    <input class="form-control" type="text" name="address" id="" value="<?= $address ?>">
                </div>
            </div>
            <div>
                <button type="submit" name="edit" class="btn btn-primary">Save</button>
                <a href="_actions/logout.php" class="btn btn-danger">Logout</a>
            </div>
        </form>
    </div>

</body>

</html>