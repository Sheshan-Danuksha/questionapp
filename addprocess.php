<?php
require "connection.php";
$a = $_POST["a"];
$q = $_POST["q"];

if (empty($q)) {
    echo ("Please enter Question.");
} else if (empty($a)) {
    echo ("Please enter Answer.");
} else {

    $ex = Database::search("SELECT * FROM `question` WHERE `question` LIKE '%" . $q . "%'");

    if ($ex->num_rows ==0) {
        Database::iud("INSERT INTO `question`(`question`,`answer`) VALUES ('" . $q . "','" . $a . "')");
        echo "success";
    } else {
        echo "This question is allready exsist !!";
    }
}
