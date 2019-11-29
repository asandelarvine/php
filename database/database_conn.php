<?php

$serverName   = "localhost";
$userName     = "larvine";
$password     = "password";
$databaseName = "forms";


$conn=mysqli_connect($serverName,$userName,$password,$databaseName);

    if(!$conn){
        echo"not connected!!";
    }
        


