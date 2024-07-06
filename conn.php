<?php

$host = "localhost";
$dbuser = "root";
$dbname = "642db";
$dbpass = "";

$conn = mysqli_connect(
    $host,
    $dbuser,
    $dbpass,
    $dbname
);

if (!$conn) {
    die("failed to connect" . mysqli_connect_error());
}