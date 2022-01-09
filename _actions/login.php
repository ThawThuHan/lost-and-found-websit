<?php

include("../vendor/autoload.php");

use Helpers\HTTP;
use Libs\Database\MySQL;
use Libs\Database\UserTable;

session_start();

$email = $_POST["email"];
$password = md5($_POST["password"]);

$table = new UserTable(new MySQL());
$user = $table->findByEmailAndPassword($email, $password);

if ($user) {
    $_SESSION['lf-user'] = $user;
    HTTP::redirect("/home.php");
} else {
    HTTP::redirect("/index.php", "incorrect=1");
}
