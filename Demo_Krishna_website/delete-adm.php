<?php 

session_start();

if (!isset($_SESSION['email'])) {
 header('location:admin-login.php');}else{

include "includes/connection.php";

$id = $_GET['id'];

$q = "DELETE FROM `admin` WHERE id = $id";

mysqli_query($con , $q);
header('location:all-admin.php');

}
 ?>