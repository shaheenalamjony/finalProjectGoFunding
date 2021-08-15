<?php
define('TITLE', 'Manage Employee');
define('PAGE', 'manageEmployee');
include('includes/header.php');
?>

<div class="col-sm-9 col-md-10">
  <div class="row mx-5 text-center">
    <div class="col-sm-6 mt-5">
      <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
        <div class="card-header">Employee Details</div>
        <div class="card-body">
          <h4 class="card-title">
            <a class="btn text-white" href="manageEmployee.php">View</a>
          </h4>
          
        </div>
      </div>
    </div>

    <div class="col-sm-6 mt-5">
      <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
        <div class="card-header">Employee Details</div>
        <div class="card-body">
          <h4 class="card-title">
            <a class="btn text-white" href="manageEmployeeAdd.php">Add Employee</a>
          </h4>
          
        </div>
      </div>
    </div>


<div class="col-sm-9 col-md-10">
  <?php 
    include('manageEmployee/manage.php');
  ?>
</div>
  </div>
</div>
<?php
include('includes/footer.php');
?>