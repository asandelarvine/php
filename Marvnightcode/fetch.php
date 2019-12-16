<?php
include_once 'header.php';
include_once 'database_connection.php';
?>
    <h1>Registered Peeps</h1>
    <table class= "table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Email</th>
                <th scope="col">Password</th>
                <th scope="col">Address</th>
                <th scope="col">City</th>
                <th scope="col">State</th>
            </tr>
        </thead>
        <?php
            $sql= 'SELECT * FROM heartbreak';
            $result= mysqli_query($conn, $sql);
        ?>
        <tbody>
            <?php
                if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_assoc($result)){
            ?>  
                <tr>
                    <td><?php echo $row['id'];?></td>
                    <td><?php echo $row['first_name'];?></td>
                    <td><?php echo $row['last_name'];?></td>
                    <td><?php echo $row['email'];?></td>
                    <td><?php echo $row['password'];?></td>
                    <td><?php echo $row['address'];?></td>
                    <td><?php echo $row['city'];?></td>
                    <td><?php echo $row['state'];?></td>
                </tr>
            <?php
                    }
                }//else {
                   // echo "No Registered peeps yet!!";
                //}  
            ?>
    </table>
<?php
include_once 'footer.php';
?>