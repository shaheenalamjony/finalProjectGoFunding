<?php
$id=$_GET['id'];
include('../../dbconnection.php');
session_start();
if($_SESSION['is_employeeLogin']){
    $email = $_SESSION['email'];
}else{
  header("location:employeeLogin.php");
}
$sql ="DELETE from user where uid={$id}";
$result=mysqli_query($conn,$sql) or die("Sql unsuccessful");

header("location:../manageUser.php");

mysqli_close($conn);

?>