<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <title>
  <?php echo TITLE; ?>
 </title>
 <!-- Bootstrap CSS -->
 <link rel="stylesheet" href="../css/bootstrap.min.css">

 <!-- Font Awesome CSS -->
 <link rel="stylesheet" href="../css/all.min.css">

 <!-- Custome CSS -->
 <link rel="stylesheet" href="../css/custom.css">

</head>

<body>
 <!-- Top Navbar -->
 <nav class="navbar navbar-dark fixed-top bg-success p-0 shadow">
  <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="dashboard.php">GoFunding</a>
 </nav>

 <!-- Side Bar -->
 <div class="container-fluid mb-5" style="margin-top:40px;">
  <div class="row">
   <nav class="col-sm-3 col-md-2 bg-light sidebar py-5 d-print-none">
    <div class="sidebar-sticky">
     <ul class="nav flex-column">

      <li class="nav-item">
       <a class="nav-link <?php if(PAGE == 'profileUpdate') { echo 'active'; } ?> " href="profileUpdate.php">
        <i class="fas fa-tachometer-alt"></i>
        Profile Update
       </a>
      </li>

      <li class="nav-item">
       <a class="nav-link <?php if(PAGE == 'submitRequest') { echo 'active'; } ?>" href="submitRequest.php">
        <i class="fas fa-align-center"></i>
        Submit Request
       </a>
      </li>

      <li class="nav-item">
       <a class="nav-link <?php if(PAGE == 'requestStatus') { echo 'active'; } ?>" href="requestStatus.php">
        <i class="fas fa-database"></i>
        Request Status
       </a>
      </li>

      <li class="nav-item">
       <a class="nav-link <?php if(PAGE == 'changePassword') { echo 'active'; } ?>" href="changePassword.php">
        <i class="fas fa-key"></i>
        Change Password
       </a>
      </li>

      <li class="nav-item">
       <a class="nav-link" href="../logout.php">
        <i class="fas fa-sign-out-alt"></i>
        Logout
       </a>
      </li>

     </ul>
    </div>
   </nav>