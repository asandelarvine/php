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
<div id="body">
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

	//   elseif($_GET['fields'] =="password"){
    //     echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
    //     <strong>ERROR:</strong> phonenumber must be a number!
    //     <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    //       <span aria-hidden='true'>&times;</span>
    //     </button>
	//   </div>";
	  
	  
      }else{
        echo "";
      }
	  ?>
	  
	 
	
	<form action="form2.php" method="POST">
	
	<h1>REGISTRATION FORM</h1><br>
	<div>
		<b>Firstname:<span style="color:red">*</span>
		<input id="fname" name="firstname" type="text"><br>
   
		<br>
		<b>Lastname:<span style="color:red">*</span>
		<input id="lname"  name="lastname" type="text"><br>
		<br>
		<b>Phonenumber:<span style="color:red">*</span>
		<input id="phone"  name="phonenumber" type="number"><br>
		
		<br>
		<b>Gender:<span style="color:red">*</span>
		<input id="male" type="radio" name="gender" value="Male">Male
	    <input id="female" type="radio" name="gender" value="Female">Female<br>
        <br>
		<b>Date of Birth:<span style="color:red">*</span>
		<input id="DOB" type="date" name="date" id="" style="margin-top:5px;"  ><br>
		<br>
		<b>Address:
		<input id="address" type="text" placeholder=".. 10 Nairobi"><br>
		<br>
		<b>Language :<span style="color:red">*</span></b>
	<div  id="lang">
		<input type="checkbox" style = "margin-left:5px;"  name = "language"  value="html">HTML 
		<input type="checkbox" style = "margin-left:10px;" name = "language"  value="css">CSS
	    <input type="checkbox" style = "margin-left:10px;" name = "language"  value="php">PHP
	    <input type="checkbox" style = "margin-left:10px;" name = "language"  value="js">JS 
	    <input type="checkbox" style = "margin-left:10px;" name = "language"  value="go">GO
	    <input type="checkbox" style = "margin-left:10px;" name = "language"  value="jquery">JQUERY
	</div>
	<br>
	<br>
		<b>Hobbies & Talents:<span style="color:red">*</span></b>
	<div  id="hobbies">
		 <select name="hobbies" id="">
		 <option value="---">
			 ---
			<option value="swimming">
				Swimming
			</option>
			<option value="travelling">
				Travelling
			</option>
			<option value="dancing">
				Dancing
			</option>
			<option value="singing">
				Singing
			</option>
			<option value="reading">
				Reading
			</option>
			<option value="gaming">
				Gaming
			</option>
		</select><br>
	</div>
		<br>
		<b>E-mail:<span style="color:red">*</span></b>
		<input id="email" name="email" style="margin-top:5px;" type="email"><br>
		<br>
		<b>Password:<span style="color:red">*</span></b>
		<input id="password-field" type="password" class="form-control" name="password">
	    <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span> <br>
		<br>
		<b>Retype password:<span style="color:red">*</b>
		<input id="retypepassword"  name="retypepassword" style="margin-top:5px;" type="password"><br>
		<br>
		<br>
		<b>Additional info:<span style="color:red">*</b><br>
		<textarea id="text" cols="30" name="additional info" rows="10"></textarea><br>
		<br>
		<input name="terms and conditions"  id="info" type="checkbox"<b>Terms and Conditions.</b><br>
		<br>
		<br>
	</div>

	<div>
		<input type="submit" disable name="submit" id="btn" value="Register">
	</div>
	
	</form>
<script src="https://code.jquery.com/jquery-3.4.1.js" 
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
			  crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script>
		$('#info').click(function(){
			$('.btn').removeAttr('disabled');
		});

		$(".toggle-password").click(function()
		 { $(this).toggleClass("fa-eye fa-eye-slash"); var input = $($(this).attr("toggle")); 
		 if (input.attr("type") == "password") { input.attr("type", "text");
		  } else { 
			  input.attr("type", "password"); 
			  } 
		});
</script>
</body>
</html>
