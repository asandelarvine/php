<?php

include_once('connection.php');

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $gender = $_POST['gender'];

    $stmt = "INSERT INTO test (NAME, GENDER) VALUES ('$name','$gender');";
    mysqli_query($conn, $stmt);

    header("Location:fetch.php");
    exit();
}
