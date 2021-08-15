<?php
define('TITLE', 'Check Request');
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
//admin info


  $sql1 = "SELECT * FROM employee where eEmail='{$_SESSION['email']}'";
 $result1 = $conn->query($sql1);
 $row1 = $result1->fetch_assoc();



 if(isset($_REQUEST['view'])){
  $sql = "SELECT * FROM submitrequest_tb WHERE request_id = {$_REQUEST['id']}";
 $result = $conn->query($sql);
 $row = $result->fetch_assoc();
 }

//  start delete data
if(isset($_REQUEST['delete'])){
  $sql = "DELETE FROM submitrequest_tb WHERE request_id = {$_REQUEST['id']}";
  if($conn->query($sql) === TRUE){
    // echo "Record Deleted Successfully";
    // below code will refresh the page after deleting the record
    // echo '<meta http-equiv="refresh" content= "0;URL=?closed" />';
    header("location:requests.php");
    } else {
      // echo "Unable to Delete Data";
    }
  }
// end delete data



// start store accept request data

  if(isset($_REQUEST['assign'])){

    $rid = $_REQUEST['request_id'];
    $ramount=$_REQUEST['requester_amount']; //amount add
    $requesterid=$_REQUEST['uid'];  //add user
    $rinfo = $_REQUEST['request_info'];
    $rdesc = $_REQUEST['requestdesc'];
    $rname = $_REQUEST['requestername'];
    $radd1 = $_REQUEST['address1'];
    $radd2 = $_REQUEST['address2'];
    $rcity = $_REQUEST['requestercity'];
    $rstate = $_REQUEST['requesterstate'];
    $rzip = $_REQUEST['requesterzip'];
    $remail = $_REQUEST['requesteremail'];
    $rmobile = $_REQUEST['requestermobile'];    
    $rdate = $_REQUEST['inputdate'];
    $rassigntech = $_REQUEST['assigntech']; //admin name
    $rid=$_REQUEST['id']; //admin id
    $ramount=$_REQUEST['requester_amount']; //request amount

    $sql2 = "INSERT INTO acceptrequest_tb (request_id, request_info, request_desc, requester_name, requester_add1, requester_add2, requester_city, requester_state, requester_zip, requester_email, requester_mobile,uid,request_amount,vid,vname,assgin_date) VALUES ('$rid', '$rinfo','$rdesc', '$rname', '$radd1', '$radd2', '$rcity', '$rstate', '$rzip', '$remail', '$rmobile', '$requesterid', '$ramount', '$rid', '$rassigntech', '$rdate')";

    mysqli_query($conn,$sql2) or die("sql2 failed");

    




  }

// end store accept request data






?>


<!-- start form column -->

<div class="col-sm-9 mt-5 jumbotron">
  <!-- Main Content area Start Last -->
  <form action="" method="POST">
    <h5 class="text-center">Check Request</h5>

    <div class="form-group">
      <label for="inputRequestDescription">User Id</label>
      <input type="text" class="form-control" id="inputRequestDescription" placeholder="User Id" name="uid" value="<?php if(isset($row['request_id'])) {echo $row['requester_id']; }?>" readonly>
    </div>

    

    <div class="form-group">
      <label for="request_id">Request ID</label>
      <input type="text" class="form-control" id="request_id" name="request_id" value="<?php if(isset($row['request_id'])) {echo $row['request_id']; }?>"
        readonly>
    </div>


    <div class="form-group">
      <label for="inputRequestInfo">Amount</label>
      <input type="text" class="form-control" id="inputRequestInfo" placeholder="Enter the amount" name="requester_amount" value="<?php if(isset($row['request_id'])) {echo $row['requester_amount']; }?>">
</div>


    <div class="form-group">
      <label for="request_info">Request Info</label>
      <input type="text" class="form-control" id="request_info" name="request_info" value="<?php if(isset($row['request_info'])) {echo $row['request_info']; }?>">
    </div>
    <div class="form-group">
      <label for="requestdesc">Description</label>
      <input type="text" class="form-control" id="requestdesc" name="requestdesc" value="<?php if(isset($row['request_desc'])) { echo $row['request_desc']; } ?>">
    </div>
    <div class="form-group">
      <label for="requestername">Name</label>
      <input type="text" class="form-control" id="requestername" name="requestername" value="<?php if(isset($row['requester_name'])) { echo $row['requester_name']; } ?>">
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="address1">Address Line 1</label>
        <input type="text" class="form-control" id="address1" name="address1" value="<?php if(isset($row['requester_add1'])) { echo $row['requester_add1']; } ?>">
      </div>
      <div class="form-group col-md-6">
        <label for="address2">Address Line 2</label>
        <input type="text" class="form-control" id="address2" name="address2" value="<?php if(isset($row['requester_add2'])) {echo $row['requester_add2']; }?>">
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-4">
        <label for="requestercity">City</label>
        <input type="text" class="form-control" id="requestercity" name="requestercity" value="<?php if(isset($row['requester_city'])) {echo $row['requester_city']; }?>">
      </div>
      <div class="form-group col-md-4">
        <label for="requesterstate">State</label>
        <input type="text" class="form-control" id="requesterstate" name="requesterstate" value="<?php if(isset($row['requester_state'])) { echo $row['requester_state']; } ?>">
      </div>
      <div class="form-group col-md-4">
        <label for="requesterzip">Zip</label>
        <input type="text" class="form-control" id="requesterzip" name="requesterzip" value="<?php if(isset($row['requester_zip'])) { echo $row['requester_zip']; } ?>"
          onkeypress="isInputNumber(event)">
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-8">
        <label for="requesteremail">Email</label>
        <input type="email" class="form-control" id="requesteremail" name="requesteremail" value="<?php if(isset($row['requester_email'])) {echo $row['requester_email']; }?>">
      </div>
      <div class="form-group col-md-4">
        <label for="requestermobile">Mobile</label>
        <input type="text" class="form-control" id="requestermobile" name="requestermobile" value="<?php if(isset($row['requester_mobile'])) {echo $row['requester_mobile']; }?>"
          onkeypress="isInputNumber(event)">
      </div>
    </div>


    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="assigntech">Verified by</label>
        <input type="text" class="form-control" id="assigntech" name="assigntech" value="<?php echo $row1['eName']; ?>"  readonly>
      </div>

      <div class="form-row">
      <div class="form-group col-md-3">
        <label for="assigntech">Verified by</label>
        <input type="text" class="form-control" id="assigntech" name="id" value="<?php echo $row1['eid']; ?>"  readonly>
      </div>



      <div class="form-group col-md-3">
        <label for="inputDate">Date</label>
        <input type="date" class="form-control" id="inputDate" name="inputdate">
      </div>
    </div>
    
    <div class="float-right">
      <button type="submit" class="btn btn-success" name="assign">Assign</button>
      <button type="reset" class="btn btn-secondary">Reset</button>
    </div>
  </form>
  <!-- below msg display if required fill missing or form submitted success or failed -->
  <?php if(isset($msg)) {echo $msg; } ?>
</div> <!-- Main Content area End Last -->



<!-- end form column -->




<?php
include('includes/footer.php');
?>