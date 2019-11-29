
<?php
    $serverName="localhost";
    $userName="root";
    $password="";
    $databaseName="larvine";

    $conn=mysqli_connect($serverName,$userName,$password,$databaseName);
    if($conn){
        echo"connected";
    }else 
        echo"not connected!!";
?>