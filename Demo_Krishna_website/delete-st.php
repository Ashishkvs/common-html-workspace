<?php 
include "includes/connection.php";

session_start();

if (!isset($_SESSION['email'])) {
 header('location:admin-login.php');}else{


$id = $_GET['id'];

$q = "DELETE FROM `apply` WHERE id = $id";

mysqli_query($con , $q);
echo "<script> alert('Hello! I am an alert box!!') </script>";
header('location:all-students.php');


}
 ?>