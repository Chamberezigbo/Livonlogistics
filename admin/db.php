<?php

$dbHost = "localhost";
$dbUser = "root";
$dbPass = "";
$dbName = "logisticsv1";

// $dbHost = "localhost";
// $dbUser = "webshipp_package";
// $dbPass = "3!*31iza4!ch";
// $dbName = "livonxpr";


$conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

if (!$conn) {
     die("Database not connected");
}
