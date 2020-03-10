<?php
require_once "connection.php";

if(isset($_POST['submit'])){
    $firstName = mysqli_real_escape_string($connection, $_POST['fname']);
    $lastName = mysqli_real_escape_string($connection, $_POST['lname']);
    $phoneNumber = mysqli_real_escape_string($connection,$_POST['phonenumber']);


    $sql = "INSERT INTO kile (firstName, lastName, phoneNumber) VALUES('$firstName', '$lastName', '$phoneNumber')";
    if (mysqli_query($connection,$sql)){
        echo "<script type='text/javascript'> window.alert('person added successfully')</script>";
        
        header("Location:index.php");
        exit();
    }else{
        echo "ERROR: not able to execute $sql. " . mysqli_error ($connection);
    };



}
