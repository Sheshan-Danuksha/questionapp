<?php
require "connection.php";
$c = Database::search("SELECT * FROM `count`");
$cn = $c->num_rows;

if ($cn == 1) {
    $c_data =  $c->fetch_assoc();
    $i = $c_data["count"];
    $i = $i + 1;
    Database::iud("UPDATE `count` SET `count`='" . $i . "' WHERE `id`='1'");
}
