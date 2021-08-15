<?php
include '../dbconnection.php';

$ename=$_POST['name'];
$eusername=$_POST['username'];
$eemail=$_POST['email'];
$egender=$_POST['gender'];
$epassword=$_POST['password'];

if(isset($_REQUEST['signup'])){
      if(($_REQUEST['ename'] == "") || ($_REQUEST['eusername'] == "") || ($_REQUEST['eemail'] == "") || ($_REQUEST['gender'] == "") || ($_REQUEST['epassword'] == "")){

      }
}



$sql = "insert into user(uName,uUsername,uEmail,uGender,uPassword)
      values('{$ename}','{$eusername}','{$eemail}','{$egender}','{$epassword}')";

$result = mysqli_query($conn,$sql) or die("Sql unsuccessful");

// header("location: add.php");

mysqli_close($conn);

?>

<?php
  include('dbConnection.php');

  if(isset($_REQUEST['rSignup'])){
    // Checking for Empty Fields
    if(($_REQUEST['rName'] == "") || ($_REQUEST['rEmail'] == "") || ($_REQUEST['rPassword'] == "")){
      $regmsg = '<div class="alert alert-warning mt-2" role="alert"> All Fields are Required </div>';
    } else {
      $sql = "SELECT r_email FROM requesterlogin_tb WHERE r_email='".$_REQUEST['rEmail']."'";
      $result = $conn->query($sql);
      if($result->num_rows == 1){
        $regmsg = '<div class="alert alert-warning mt-2" role="alert"> Email ID Already Registered </div>';
      } else {
        // Assigning User Values to Variable
        $rName = $_REQUEST['rName'];
        $rEmail = $_REQUEST['rEmail'];
        $rPassword = $_REQUEST['rPassword'];
        $sql = "INSERT INTO requesterlogin_tb(r_name, r_email, r_password) VALUES ('$rName','$rEmail', '$rPassword')";
        if($conn->query($sql) == TRUE){
          $regmsg = '<div class="alert alert-success mt-2" role="alert"> Account Succefully Created </div>';
        } else {
          $regmsg = '<div class="alert alert-danger mt-2" role="alert"> Unable to Create Account </div>';
        }
      }
    }
  }
?>





















//<?php
//
//$stu_name = $_POST['sname'];
//$stu_address = $_POST['saddress'];
//$stu_class = $_POST['class'];
//$stu_phone = $_POST['sphone'];
//
//$conn = mysqli_connect("localhost","root","","crud") or die//("Connection Failed");
//
//$sql ="insert into student(sname,saddress,sclass,sphone)
//       values
//       ('{$stu_name}','{$stu_address}','{$stu_class}','//{$stu_phone}')" ;
//$result = mysqli_query($conn,$sql) or die("Sql Unsuccessful");
//
//header("Location: index.php");
//
//mysqli_close($conn);
//
//?>