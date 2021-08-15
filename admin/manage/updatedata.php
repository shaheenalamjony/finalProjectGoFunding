<?php



$id=$_POST['id'];
$name=$_POST['name'];
$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];

include('../../dbconnection.php');

$sql ="UPDATE user set uName='{$name}',uUsername='{$username}',uEmail='{$email}',uPassword='{$password}' where uid={$id}";
$result=mysqli_query($conn,$sql) or die("sql unsuccessful");

header("location:../manageUser.php");
mysqli_close($conn);


?>