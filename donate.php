<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donate</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="css/all.min.css">

    <!-- Custome CSS -->
    <link rel="stylesheet" href="css/custom.css">
    </head>
    <body>
        <!-- Top Navbar -->
    <nav class="my-10 navbar navbar-dark fixed-top bg-success p-0 shadow">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="donate.php">GoFunding</a>
    </nav>
    <br><br>

    <?php 
        include('dbconnection.php');
        $sql = "SELECT * FROM acceptrequest_tb";
        $result = $conn->query($sql);
        if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
    ?>
    <div class="col-sm-12 mb-5" style="margin-top:20px;">

        <div class="card mt-5  mx-20 text-light bg-success">

        <div class="card-header">
        <?php echo $row['request_info']; ?>
        </div>
        <div class="card-body">
        <h5 class="card-title">
            <?php echo $row['request_desc']; ?>
        </h5>
        <p class="card-text">
            <?php echo $row['requester_name']; ?>
        </p>
        <p class="card-text">We need : <?php echo $row['request_amount']; ?>    
        </p>
        </p>
        <p class="card-text">Date : <?php echo $row['assgin_date']; ?>    
        </p>
        <div class="float-right">
            <form action="donationForm.php" method="POST">

                 <input type="hidden" name="id" value="<?php echo $row['rno']; ?>">
                 <input type="submit" class="btn btn-danger mr-3" name="view" value="DONATE">

                 </form>
        </div> 
       </div> 

        </div>

    </div>

    <?php
        }
    }
    ?>







    <!-- Boostrap JavaScript -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/all.min.js"></script>
    <script src="js/custom.js"></script>
</body>
</html>