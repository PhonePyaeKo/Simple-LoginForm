<?php

use Helpers\HTTP;
use Libs\Database\MySQL;
use Libs\Database\UsersTable;

include("../vendor/autoload.php");

$table = new UsersTable(new MySQL);

$email = $_POST['email'];
$password = $_POST['password'];

$user = $table->find($email, $password);

if($user) {
    session_start();
    $_SESSION['user'] = $user;
    HTTP::redirect("profile.php", "Login_Success");
} else {
    HTTP::redirect("index.php", "Incorrect_Login");
}