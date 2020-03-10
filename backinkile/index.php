<?php
   require_once "header.php";
   require_once "footer.php";
 ?>
    <h1>Application Form</h1>
 <form action = "insert.php" method = "POST">
  <div class="form-row">
    <div class="col">
      <input type="text" name="fname" class="form-control" placeholder="First name">
    </div>
    <div class="col">
      <input type="text" name="lname" class="form-control" placeholder="Last name">
    </div>
    <div class="col">
      <input type="number" name="phonenumber" class="form-control" placeholder="Phone number">
    </div>
     <input type="submit" value="Submit" name="submit">

  </div>
</form>

