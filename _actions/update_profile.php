<?php

include("../vendor/autoload.php");

use Libs\Model\User;
use Libs\Database\UserTable;
use Libs\Database\MySQL;
use Helpers\HTTP;

session_start();

$user = $_SESSION['lf-user'];
$user_id = $user->id;
$email = $user->email;
$password = $user->password;

if (isset($_POST['edit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    $user = new User($name, $email, $password, $phone, $address);

    $table = new UserTable(new MySQL());
    $result = $table->update($user->toMap(), $user_id);
    if ($result) {
        $new_user = $table->findByEmailAndPassword($email, $password);
        if ($new_user) {
            session_unset();
            $_SESSION['lf-user'] = $new_user;
            HTTP::redirect("/profile.php", "success=true");
        } else {
            HTTP::redirect("/profile.php", "success=false");
        }
    }
}
