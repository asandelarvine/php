<?php
require_once 'database_connection.php';

if(isset($_POST['submit'])){
    $fname= mysqli_real_escape_string($conn, $_POST['fname']);
    $lname= mysqli_real_escape_string($conn, $_POST['lname']);
    $email= mysqli_real_escape_string($conn, $_POST['email']);
    $password= mysqli_real_escape_string($conn, $_POST['password']);
    $address= mysqli_real_escape_string($conn, $_POST['address']);
    $city= mysqli_real_escape_string($conn, $_POST['city']);
    $state= mysqli_real_escape_string($conn, $_POST['state']);
   
    $sql= "INSERT INTO heartbreak(first_name, last_name, email, password, address, city, state)
    values('$fname', '$lname', '$email', '$password', '$address', '$city', '$state');";
    if(mysqli_query ($conn, $sql)){
        echo"<script type='text/javascript'>
        alert('successfully applied');
        </script>";
        header('Location:form.php');
        exit();
    }else{
        echo "ERROR: TRY AGAIN $sql." . mysqli_error($conn);
    }
}