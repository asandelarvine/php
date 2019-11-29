<?php
    include_once "head.php";
?>
  <h1 class="text-lg-center">LOG IN</h1>
    <form>
		<div class="container">
			<div class="form-row">
				<div class="form-group">
					<label for="exampleInputUsername">User name</label> <input class="form-control" id="exampleInputUsername" placeholder="Enter User name" type="username">
				</div>
			</div>
		</div>
		<div class="container">
			<div class="form-row">
				<div class="form-group">
					<label for="exampleInputPassword1">Password</label> <input class="form-control" id="exampleInputPassword1" placeholder="Password" type="password">
				</div>
			</div>
		</div>
		<div class="container">
			<div class="form-group">
				<button class="btn btn-primary" type="submit">LOG IN</button>
				<button class="btn btn-danger" type="submit">CANCEL</button>
				<p>New user: <a href="registration.php">Register</a></p>
			</div>
		</div>
	</form>

<?php
    include_once "footer.php";
?>
