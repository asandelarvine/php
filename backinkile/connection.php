<?php
$serverName = "localhost";
$userName = "root";
$password = "password";
$databaseName = "back";

$connection = mysqli_connect($serverName, $userName, $password, $databaseName);
if(!$connection){
    echo "CHECK CONNECTION!!!";
}else{
    echo "CONNECTED KAMA MASHTER";
}
