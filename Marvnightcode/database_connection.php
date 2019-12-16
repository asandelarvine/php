<?php
$serverName ="localhost";
$userName ="root";
$password ="password";
$databaseName ="kimbocode";

$conn=mysqli_connect($serverName,$userName,$password,$databaseName);
    if(!$conn){
        echo"check your connection!";
    }else{
        echo"CONNECTED!";
    }
