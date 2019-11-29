<?php
    include_once "head.php";
?>
<br>
<form action="">
	<h1  class="text-lg-center">SIGN-UP</h1>
	<div class="container">
		<div class="form-row">
			<div class="form-group">
				<label for="exampleInputFirstname">First Name</label> 
				<input class="form-control" id="" placeholder="Enter First name" name="fname "type="text">
            </div>
        </div>
    </div>
    <div class="container">
	    <div class="form-row">    
			<div class="form-group">
				<label for="exampleInputLastname">Last Name</label> 
				<input class="form-control" id="exampleInputLastname" placeholder="Enter Last name" name="lname" type="text">
			</div>
		</div>
	</div>
	<div class="container">
	    <div class="form-row">    
			<div class="form-group">
				<label for="exampleInputLastname">User Name</label>
				 <input class="form-control" id="exampleInputUsername" placeholder="Enter User name" name="username" type="text">
			</div>
		</div>
	</div>
	<div class="container">
		<div class="form-row">
			<div class="form-group">
				<label for="exampleInputEmail1">Email address</label> <input class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="email"  type="email">
			</div>
		</div>
	</div>
	<div class="container">
		<div class="form-row">
			<div class="form-group">
				<label for="exampleInputPassword1">Password</label> <input class="form-control" id="exampleInputPassword1" placeholder="Password" name="password"  type="password">
			</div>
		</div>
	</div>
	<div class="container">
		<div class="form-row">
			<div class="form-group form-check">
				<input class="form-check-input" id="exampleCheck1" type="checkbox"> <label class="form-check-label" for="exampleCheck1">Check me out</label>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="form-group"> 
			<button class="btn btn-success" type="submit">Submit</button>
			<p>Already signed: <a href="login.php">LOG IN</a></p>
		</div>
    </div>
</form>
  
<?php
    include_once "footer.php";
?>


