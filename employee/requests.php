<?php
define('TITLE', 'Request');
define('PAGE', 'requests');
include('includes/header.php');
include('../dbconnection.php');
// start update
session_start();
if($_SESSION['is_employeeLogin']){
    $email = $_SESSION['email'];
}else{
  header("location:employeeLogin.php");
}
?>

<!-- start 2nd column -->
<div class="col-sm-9 mb-5">
  <!-- Main Content area start Middle -->
  <?php 
 $sql = "SELECT request_id, request_info, request_desc, requester_date FROM submitrequest_tb";
 $result = $conn->query($sql);
 if($result->num_rows > 0){
  while($row = $result->fetch_assoc()){
   echo '<div class="card mt-5 mx-5">';
   echo '<div class="card-header">';
   echo 'Request ID : '. $row['request_id'];
   echo '</div>';
   echo '<div class="card-body">';
   echo '<h5 class="card-title">Request Info : ' . $row['request_info'] . '</h5>';
   echo '<p class="card-text">' . $row['request_desc'] . '</p>';
   echo '<p class="card-text">Request Date: ' . $row['requester_date'] . '</p>';
   echo '<div class="float-right">';

   echo '<form action="checkRequest.php" method="POST"> <input type="hidden" name="id" value='. $row["request_id"] .'><input type="submit" class="btn btn-danger mr-3" name="view" value="View"><input type="submit" class="btn btn-secondary" name="delete" value="Delete"></form>';

   echo '</div>' ;
   echo '</div>' ;
   echo'</div>';
  }
 } else {
  echo '<div class="alert alert-info mt-5 col-sm-6" role="alert">
  <h4 class="alert-heading">Well done!</h4>
  <p>Aww yeah, you successfully assigned all Requests.</p>
  <hr>
  <h5 class="mb-0">No Pending Requests</h5>
</div>';
 }




 ?>
<!-- end 2nd column -->
</div>
<!-- start view form -->



<?php
include('includes/footer.php');
?>