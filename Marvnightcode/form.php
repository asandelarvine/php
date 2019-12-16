<?php
    include_once "header.php";
?>
<scan style=text-align:center;><div class="h1">Registration Form</h1></div></scan>
<div class="container">
<form action="insertinto.php" method="POST">
<div class="form-row">
    <div class="col">
    <label>First Name<span style=color:red>*</span></label>
    <input type="text" name="fname" class="form-control" placeholder="Enter your First name">
    </div>
    <div class="col">
    <label>Last Name<span style=color:red>*</span></label>
    <input type="text" name="lname" class="form-control" placeholder="Enter your last name">
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-6">
    <label for="inputEmail4">Email<span style=color:red>*</span></label>
    <input type="email" name="email" class="form-control" id="inputEmail4">
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-6">
    <label for="inputPassword4">Password<span style=color:red>*</span></label>
    <input type="password" name="password" class="form-control" id="inputPassword4">
    </div>
</div>
<div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" name="address" class="form-control" id="inputAddress" placeholder="1234 Main St">
</div>
<div class="form-row">
    <div class="form-group col-md-6">
    <label for="inputCity">City</label>
    <input type="text" name="city" class="form-control" id="inputCity">
    </div>
    <div class="form-group col-md-4">
    <label for="inputState">State</label>
    <select id="inputState" name="state" class="form-control">
        <option selected>Choose...</option>
        <option>Kenya</option>
        <option>Germany</option>
        <option>Russiah</option>
        <option>Madagascar</option>
        <option>Lybia</option>
    </select>
    </div>
</div>
<div class="form-group">
    <div class="form-check">
    <input Required class="form-check-input" type="checkbox" id="gridCheck">
    <label class="form-check-label" for="gridCheck">
        Terms and Condtions
    </label>
    </div>
</div>
<button type="submit" value="submit" name="submit" class="btn btn-primary">Submit</button>
</div>
</form>
<?php
    include_once "footer.php";
?>


