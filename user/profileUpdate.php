<?php
define('TITLE', 'Profile Update');
define('PAGE', 'profileUpdate');
include('includes/header.php');
include('../dbconnection.php');
session_start();
if($_SESSION['is_login']){
    $email = $_SESSION['email'];
}else{
  header("location:userLogin.php");
}
$sql = "SELECT * FROM user WHERE uEmail='{$email}'";
// $result = mysqli_query($conn,$sql) or die("sql unsuccessful");
$result = $conn->query($sql);
 if($result->num_rows == 1){
 $row = $result->fetch_assoc();
 $name = $row["uName"]; }

 if(isset($_REQUEST['nameupdate'])){
  if(($_REQUEST['rName'] == "")){
   $passmsg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert"> Fill All Fileds </div>';
  } else {
   $name = $_REQUEST["rName"];
   $sql = "UPDATE user SET uName = '$name' WHERE uEmail = '$email'";
   if($conn->query($sql) == TRUE){
   // below msg display on form submit success
   $passmsg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert"> Updated Successfully </div>';
   } else {
   // below msg display on form submit failed
   $passmsg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert"> Unable to Update </div>';
      }
    }
   }

?>
<div class="col-sm-6 mt-5">
  <form class="mx-5" method="POST">
    <!-- <div class="form-group">
      <label for="inputEmail">ID</label>
      <input type="text" class="form-control" id="inputEmail" value="<?php //echo $_SESSION['uid']; ?> " readonly>
    </div> -->
    <div class="form-group">
      <label for="inputEmail">Email</label>
      <input type="email" class="form-control" id="inputEmail" value="<?php echo $_SESSION['email']; ?> " readonly>
    </div>
    <div class="form-group">
      <label for="inputName">Name</label>
      <input type="text" class="form-control" id="inputName" name="rName" value="<?php echo $name; ?>">
    </div>
    <button type="submit" class="btn btn-danger" name="nameupdate">Update</button>
    <?php if(isset($passmsg)) {echo $passmsg; } ?>
  </form>
</div>
</div>
</div>
<?php
// include('includes/footer.php'); 
include('includes/footer.php');
?>