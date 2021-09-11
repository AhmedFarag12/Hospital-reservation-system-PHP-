<?php 
include('basic.php');
$id = $_GET["d"];
$sql = "DELETE FROM patients WHERE id='$id'";
mysqli_query($connection,$sql);
header("Location: admin.php");
?>