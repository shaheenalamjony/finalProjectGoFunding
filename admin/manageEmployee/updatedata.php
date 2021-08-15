<?php



$id=$_POST['id'];
$name=$_POST['name'];
$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];

include('../../dbconnection.php');

$sql ="UPDATE employee set eName='{$name}',eUsername='{$username}',eEmail='{$email}',ePassword='{$password}' where eid={$id}";
$result=mysqli_query($conn,$sql) or die("sql unsuccessful");

header("location:../manageEmployee.php");
mysqli_close($conn);


?>