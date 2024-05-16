<?php
require "connection.php";
$ra = $_POST["ra"];
$c = $_POST["c"];

if (empty($ra)) {
    echo ("Please enter rating.");
} else if (empty($c)) {
    echo ("Please enter Comment.");
} else {

    Database::iud("INSERT INTO `rate`(`rate`,`comment`) VALUES ('" . $ra . "','" . $c . "')");
    echo "success";
}
