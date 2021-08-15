<?php
$id=$_GET['id'];
include('../../dbconnection.php');
$sql ="DELETE from employee where eid={$id}";
$result=mysqli_query($conn,$sql) or die("Sql unsuccessful");

header("location:../manageEmployee.php");

mysqli_close($conn);

?>