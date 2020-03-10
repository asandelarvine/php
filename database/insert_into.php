<?php
include_once 'database_conn.php';

if ($conn) {
    echo "yes";
}
if(isset($_POST['submit'])){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $number = $_POST['phonenumber'];
    $gender = $_POST['gender'];
    $language = $_POST['language'];
    $hobbies = $_POST['hobbies'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $info = $_POST['additionalInfo'];

    
    $yooh = "INSERT INTO form (FIRST_NAME, LAST_NAME, PHONE_NUMBER,	GENDER,	LANGUAGES,	HOBBIES_TALENTS,  E_MAIL,	PASSWORD,	ADDITIONAL_INFO)
     VALUES ('$firstname','$lastname','$number','$gender','$language','$hobbies','$password','$info')";
    mysqli_query($conn, $yooh);

    header("Location:select_from.php");
    exit();
}
