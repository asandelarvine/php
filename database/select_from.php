<?php
    error_reporting(E_ALL^E_WARNING);
    include_once('database_conn.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Table</title>
  </head>
  <body>
    
    <div class="container-fluid container">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Firstname</th>
      <th scope="col">Lastname</th>
      <th scope="col">Phonenumber</th>
      <th scope="col">Gender</th>
      <th scope="col">Language</th>              
      <th scope="col">Hobbies_talents</th>
      <th scope="col">E_mail</th>
      <th scope="col">Password</th>
      <th scope="col">Additional_info</th>
    </tr>
  </thead>
  

<?php

$yooh = "SELECT * FROM form ORDER BY id DESC ;";
$result = mysqli_query($conn,$yooh);
$resultCheck = mysqli_num_rows($result);
if($resultCheck > 0){
while($rows = mysqli_fetch_assoc ($result))
    echo '
    <tbody>
    <tr>
        <th scope="row">'.$rows['ID'].'</th>
        <td>'.$rows['FIRSTNAME'].'</td>
        <td>'.$rows['LASTNAME'].'</td>
        <td>'.$rows['PHONENUMBER'].'</td>  
        <td>'.$rows['GENDER'].'</td>  
        <td>'.$rows['LANGUAGE'].'</td>  
        <td>'.$rows['HOBBIES_TALENTS'].'</td>
        <td>'.$rows['E_MAIL'].'</td>  
        <td>'.$rows['PASSWORD'].'</td> 
        <td>'.$rows['ADDITIONAL_INFO'].'</td>         
    </tr>
    </tbody>
        ';

}
?>    
</table>

<a href="form_db.html" class="btn btn-primary">BACK</a>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>