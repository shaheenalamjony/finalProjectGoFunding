<?php
define('TITLE', 'Dashboard');
define('PAGE', 'dashboard');
include('includes/header.php');
include('../dbconnection.php');
// start update
session_start();
if($_SESSION['is_employeeLogin']){
    $email = $_SESSION['email'];
}else{
  header("location:employeeLogin.php");
}
$sql = "SELECT * FROM employee WHERE eEmail='{$email}'";
// $result = mysqli_query($conn,$sql) or die("sql unsuccessful");
$result = $conn->query($sql);
 if($result->num_rows == 1){
 $row = $result->fetch_assoc();
 $name = $row["eName"]; }

 if(isset($_REQUEST['nameupdate'])){
  if(($_REQUEST['rName'] == "")){
   $passmsg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert"> Fill All Fileds </div>';
  } else {
   $name = $_REQUEST["rName"];
   $sql = "UPDATE admin SET aName = '$name' WHERE aEmail = '$email'";
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

<div class="col-sm-9 col-md-10">
  <div class="row mx-5 text-center">
    <div class="col-sm-3 mt-5">
      <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
        <div class="card-header">Requests Received</div>
        <div class="card-body">
          <h4 class="card-title">
            <a href=""></a>
          </h4>
          <a class="btn text-white" href="request.php">View</a>
        </div>
      </div>
    </div>

    <div class="col-sm-3 mt-5">
      <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
        <div class="card-header">Assigned Work</div>
        <div class="card-body">
          <h4 class="card-title">
            
          </h4>
          <a class="btn text-white" href="work.php">View</a>
        </div>
      </div>
    </div>

    <div class="col-sm-3 mt-5">
      <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
        <div class="card-header">No. of Technician</div>
        <div class="card-body">
          <h4 class="card-title">
            
          </h4>
          <a class="btn text-white" href="technician.php">View</a>
        </div>
      </div>
    </div>

    <div class="col-sm-3 mt-5">
      <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
        <div class="card-header">No. of Technician</div>
        <div class="card-body">
          <h4 class="card-title">
            
          </h4>
          <a class="btn text-white" href="technician.php">View</a>
        </div>
      </div>
    </div>

  </div>
<!-- </div> -->
<!-- start update form -->

<!-- <div class="col-sm-6 mt-5"> -->
  <form class="mx-5" method="POST">
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
include('includes/footer.php');
?>