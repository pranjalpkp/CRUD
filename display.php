<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "include/link.php"?>
    <title>Display Data</title>
</head>
<body>
    <?php include "include/navbar.php"?>
    <div class="container">
        <br><br>
        <div class="col-lg-12">
            <h2 class="text-center text-primary"> Employee Details </h2>
            <br>
            <table class="table table-striped table-hover table-bordered">
                <tr class="bg-dark text-white text-center">
                    <td>ID</td>
                    <td>First Name</td>
                    <td>Last Name</td>
                    <td>Email</td>
                    <td>Phone Number</td>
                    <td>Delete</td>
                    <td>Update</td>
                </tr>
<?php 
        include 'conn.php';

        $q="select * from employee";

        $query=mysqli_query($con,$q);
        while($res=mysqli_fetch_array($query)){

        

?>
                <tr  class="text-center">
                    <td><?php  echo $res['id']; ?></td>
                    <td><?php  echo $res['fname']; ?></td>
                    <td><?php  echo $res['lname']; ?></td>
                    <td><?php  echo $res['email']; ?></td>
                    <td><?php  echo $res['phone']; ?></td>
                    <td><button class="btn btn-danger"><a href="delete.php?id=<?php  echo $res['id']; ?>" class="text-white"> Delete
                </a></button></td>
                    <td><button class="btn btn-success"><a href="update.php?id=<?php  echo $res['id']; ?>" class="text-white"> Update
                </a></button></td>
                </tr>
                <?php 
        }
        ?>
            </table>
        </div>
    </div>
    
</body>
</html>