<?php
include 'conn.php';

if(isset($_POST['sub'])){
    $id =$_GET['id'];
    $fname=$_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $q ="UPDATE `employee` SET `id`='$id',`fname`='$fname',
`lname`='$lname',`email`='$email',`phone`='$phone' WHERE id=$id";
$query=mysqli_query($con,$q);

header('location:display.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Employee Details</title>
    <?php include "include/link.php" ?>
</head>
<body>
    <!-- Navbar -->
    <?php include "include/navbar.php" ?>
    <div class="col-lg-6 m-auto">
    <form method="post">
    <div class="card">
    <div class="class-header bg-dark">
    <h2 class="text-center text-white">Update Employee Data</h2>
    </div>
    <label> First Name: </label>
    <input type="text" name="fname" class="form-control">
    <label> Last Name: </label>
    <input type="text" name="lname" class="form-control">
    <label> Email: </label>
    <input type="text" name="email" class="form-control">
    <label> Phone: </label>
    <input type="text" name="phone" class="form-control">
    <button classs="btn btn-success" type="submit" name="sub">Submit </button>
    </div>
    </form>
    </div>
</body>
</html>