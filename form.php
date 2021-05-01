<?php
include 'conn.php';

if (isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $dept = $_POST['dept'];
    $exp = $_POST['exp'];
    $q = "INSERT INTO `employee`(`fname`, `lname`, `email`, `phone`,`dept`, `exp`)
     VALUES ('$fname','$lname','$email','$phone','$dept','$exp')";

    $query = mysqli_query($con, $q);
    header('location:display.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Form</title>
</head>

<body>
    <!-- Navbar -->
    <?php include "include/navbar.php" ?>
    <!-- Registration Form -->
    <div class="header">
        <h2>Registration</h2>
    </div>
    <form method="post">
        <div class="input-group">
            <label>First Name</label>
            <input type="text" name="fname" required>
        </div>
        <div class="input-group">
            <label>Last Name</label>
            <input type="text" name="lname" required>
        </div>
        <div class="input-group">
            <label>Email</label>
            <input type="text" name="email" required>
        </div>
        <div class="input-group">
            <label>Phone</label>
            <input type="text" name="phone" required>
        </div>
        <div class="input-group">
            <label>Department</label>
            <input type="text" name="dept" required>
        </div>
        <div class="input-group">
            <label>Experience</label>
            <input type="text" name="exp" required>
        </div>
        <div class="input-group">
            <button type="submit" name="submit" class="btn">Register</button>
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>

</html>