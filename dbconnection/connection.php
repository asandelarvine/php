<?php

$serverName = "localhost";
$userName = "larvine";
$password = "password";
$databaseName = "larvine";

$conn = mysqli_connect(
    $serverName,
    $userName,
    $password,
    $databaseName
);

if(!$conn){
    echo "Oops!! Disconnected";
}

