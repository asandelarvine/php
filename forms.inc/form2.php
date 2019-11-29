  <?php
if (isset($_POST['submit'])) {
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$phonenumber = $_POST['phone'];
	$gender = $_POST['gender'];
	$language = $_POST['language'];
	$hobbies = $_POST['hobbies'];
	$password = $_POST['password'];
	$retypepassword = $_POST['retypepassword'];
	$date = $_POST['date'];
	$address = $_POST['address'];
	//check if all fields are filled
	//if all required fields are filled in
		if (empty($firstname) || empty($lastname) || empty($email) || empty($phonenumber) || empty($gender) || empty($language) || $hobbies == '--' || empty($password) || empty($retypepassword) || empty($date)) {
			header("Location:form.php?fields=empty");
			exit();
			//check if firstname and lastname are letters
		}
	elseif(!preg_match("/^[a-zA-Z]*$/", $firstname) || !preg_match("/^[a-zA-Z]*$/", $lastname)) {
		header("Location:form.php?fields=names");
		exit();
		//check if firstname and lastname is capital
	}
	elseif(!ctype_upper($firstname[0]) || !ctype_upper($lastname[0])) {
		header("Location:form.php?fields=letter");
		exit();
		//phone number must be a number
	}
	elseif(!preg_match("/^[0-9]*$/", $phonenumber)) {
		header("Location:form.php?fields=number");
		exit();
	}
	//validate phone number
	elseif(strpos($phonenumber, "+254") !== "0") {
		header("Location:form.php?fields=code");
		exit();
	}
	//check if dob >18
	elseif($date > 18) {
		header("Location:form.php?fields=agebracket");
		exit();
	}
	// check if languages are >3
	elseif($languages > 3) {
		header("Location:form.php?fields=languages");
		exit();
	}
	//check if password length is less than 10 or greater than 15
	elseif(strlen($password <= 10) & ($password >= 5)) {
		header("Location:form.php?fields=passwordrange");
		exit();
	}
	// password has numbers,lowercase,upercase letters.
	//it shld have at least 6 characters {numbers,letters n underscore}
  elseif(str($password)(!preg_match("=/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]).{6,}$/")) {
		header("Location:form.php?fields=password")
		exit();
  }
  //confirming whether passwords are the same or not.
  elseif($password != $retypepassword){
    header("Location:form.php?fields=same||!same");
		exit();
  }
	//if all is met
	else {
		header("Location:form.php?fields=success");
		exit();
	}
}