<?php
include 'conn.php';
$id = $_GET['id'];
$showquery = "select * from employee where id=$id";
$showdata = mysqli_query($con, $showquery);
$data = mysqli_fetch_array($showdata);

if (isset($_POST['update'])) {
    $idupdate = $_GET['id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $dept = $_POST['dept'];
    $exp = $_POST['exp'];
    $q = "UPDATE `employee` SET `id`='$idupdate',`fname`='$fname',
    `lname`='$lname',`email`='$email',`phone`='$phone',`dept`='$dept', `exp`='$exp' WHERE `id`=$idupdate";
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
    <title>Employee Details</title>
</head>

<body>
    <!-- Navbar -->
    <?php include "include/navbar.php" ?>
    <!-- Update Form -->
    <div class="header">
        <h2>Update</h2>
    </div>
    <form method="post">
        <div class="input-group">
            <label>First Name</label>
            <input type="text" name="fname" value="<?php echo $data['fname']; ?>">
        </div>
        <div class="input-group">
            <label>Last Name</label>
            <input type="text" name="lname" value="<?php echo $data['lname']; ?>">
        </div>
        <div class="input-group">
            <label>Email</label>
            <input type="text" name="email" value="<?php echo $data['email']; ?>">
        </div>
        <div class="input-group">
            <label>Phone</label>
            <input type="text" name="phone" value="<?php echo $data['phone']; ?>">
        </div>
        <div class="input-group">
            <label>Department</label>
            <input type="text" name="dept" value="<?php echo $data['dept']; ?>">
        </div>
        <div class="input-group">
            <label>Experience</label>
            <input type="text" name="exp" value="<?php echo $data['exp']; ?>">
        </div>
        <div class="input-group">
            <button type="submit" name="update" class="btn">Update</button>
        </div>
    </form>

</body>

</html>