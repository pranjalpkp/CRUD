<?php 
include 'conn.php';

$id =$_GET['id'];

$q="DELETE FROM `employee` WHERE id= $id";

mysqli_query($con,$q);

header('location:display.php');