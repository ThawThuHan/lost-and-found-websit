<?php

include("../vendor/autoload.php");

use Helpers\HTTP;
use Libs\Model\User;
use Libs\Database\MySQL;
use Libs\Database\UserTable;

$name = $_POST['name'];
$email = $_POST['email'];
$password = md5($_POST['re-password']);

$user = new User($name, $email, $password);
$table = new UserTable(new MySQL());
if ($table) {
    $table->insert($user->toMap());
    HTTP::redirect("/index.php", "registered=true");
} else {
    HTTP::redirect("/index.php", "error=true");
}
