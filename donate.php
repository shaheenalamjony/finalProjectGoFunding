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
    <nav class="navbar navbar-dark fixed-top bg-success p-0 shadow">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="donate.php">GoFunding</a>
    </nav>

    <?php 
        $sql = "SELECT * FROM acceptrequest_tb";
        $result = $conn->query($sql);
        if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
    ?>
    <div class="col-sm-9 mb-5">
        <div class="card mt-5 mx-5">';
        <div class="card-header">';
        Request ID : '. $row['request_id'];
        </div>';
        <div class="card-body">;
        <h5 class="card-title">fdsfsf</h5>';
        <p class="card-text">dsfsfsd</p>';
        <p class="card-text">fdasdfaad </p>';
        <div class="float-right">';
 
        

        </div> ;
       </div> ;
        </div>;
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