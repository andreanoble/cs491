<?php
//variables for mysql


$block = $_POST["block"];
$lot = $_POST["lot"];
$ward = $_POST["ward"];
$street = $_POST["street"];
$zipcode = $_POST["zipcode"];
$boarded = $_POST["boarded"];
$sign = $_POST["sign"];
$description = $_POST["description"];
$comments = $_POST["comments"];


// TODO: Mysql entry



//goes to edit page and keeps the back button from resubmitting
header("Location: editEntry.php");

?>