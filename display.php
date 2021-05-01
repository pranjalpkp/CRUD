<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <title>Display Data</title>
</head>

<body>
    <?php include "include/navbar.php" ?>
    <br>
    <div class="container">
        <br>
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
                    <td>Department</td>
                    <td>Experience</td>
                    <td>Delete</td>
                    <td>Update</td>
                </tr>
                <?php
                include 'conn.php';

                $q = "select * from employee";

                $query = mysqli_query($con, $q);
                while ($res = mysqli_fetch_array($query)) {



                ?>
                    <tr class="text-center">
                        <td><?php echo $res['id']; ?></td>
                        <td><?php echo $res['fname']; ?></td>
                        <td><?php echo $res['lname']; ?></td>
                        <td><?php echo $res['email']; ?></td>
                        <td><?php echo $res['phone']; ?></td>
                        <td><?php echo $res['dept']; ?></td>
                        <td><?php echo $res['exp']; ?></td>
                        <td><button class="btn btn-danger"><a href="delete.php?id=<?php echo $res['id']; ?>" class="text-white">
                                    <i class="fa fa-trash-alt"></i></a></button></td>
                        <td><button class="btn btn-success "><a href=" update.php?id=<?php echo $res['id']; ?>" class="text-white">
                                    <i class="fa fa-edit"></i></a></button></td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>

</html>