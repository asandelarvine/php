<?php
function yooh($a){
    if(strrev($a)== $a){
        echo "it ia a PALINDROME";
    }else{
        echo "it is NOT PALIDROME";
    }
}
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta content="ie=edge" http-equiv="X-UA-Compatible">
 <!-- //link to the eye icon -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
	<link rel="stylesheet" href="forms.css">
	<title>FORM</title>
</head>
<body >
<!-- <div class="row"> -->
 
      <?php
	  if(empty($_GET)){
	}elseif($_GET['fields'] == "empty"){
		echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
		<strong>ERROR:</strong> You should fill in all fields below.
		<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
		  <span aria-hidden='true'>&times;</span>
		</button>
	  </div>";
       
        }elseif($_GET['fields'] =="success"){
          echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
          <strong>SUCCESS:</strong> All fields are filled.
          <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
          </button>
		</div>";
		
        }elseif($_GET['fields'] =="names"){
          echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
          <strong>ERROR:</strong> firstname and lastname should be letters.
          <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
          </button>
		</div>";
		
        }elseif($_GET['fields'] =="letter"){
          echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
          <strong>ERROR:</strong> firstname and lastname should start with capital.
          <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
          </button>
        </div>";
        
      }elseif($_GET['fields'] =="number"){
        echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
        <strong>ERROR:</strong> phonenumber must be a number!
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button>
	  </div>";
	  
      }else{
        echo "";
      }
	  ?>
	  

	
	