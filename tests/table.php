<?php

include("../vendor/autoload.php");

use Libs\Database\MySQL;
use Libs\Database\UsersTable;

$table = new UsersTable(new MySQL);
$id = $table->insert([
    "name" => "KoKo",
    "email" => "koko@gmail.com",
    "phone" => "16489651",
    "address" => "Ygn",
    "password" => "password",
]);

if($id) {
    echo "Data insert successful";
}