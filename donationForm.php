<?php
include('dbconnection.php');

if(isset($_REQUEST['submit'])){
    $id=$_REQUEST['id'];
    $name=$_REQUEST['name'];
    $email=$_REQUEST['email'];
    $amount=$_REQUEST['amount'];

    // $sql = "INSERT into donate (request_no,donar_email,donar_email,donar_name,d_ammount) values('$id','$name','$email','$amount')";

    // mysqli_query($conn,$sql) or sql("failed");
    // if(mysqli_query($conn,$sql) == true){
    //     echo "success";
    // }else{
    //     echo "failed";
    // }

    $sql = "insert into donate(request_no,donar_email,donar_name,d_ammount)
    values('{$id}','{$name}','{$email}','{$amount}')";

    $result = mysqli_query($conn,$sql) or die("Sql unsuccessful");
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donate now</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="css/all.min.css">

    <!-- Custome CSS -->
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="css/manage.css">
    </head>
    <body>
        <!-- Top Navbar -->
    <nav class="my-10 navbar navbar-dark fixed-top bg-success p-0 shadow">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="donate.php">GoFunding</a>
    </nav>
    <br><br>
    <br><br>

<div id="main-content">
    <h2 style="text-align:center;">Donation</h2>
    <form class="post-form" action="" method="post">
        

        

        <div class="form-group">
            <label>Full Name</label>
            <input type="hidden" name="id" value="<?php echo $_REQUEST['id']; ?>" />
            <input type="text" name="name" placeholder="Please Enter Your Name"/>
        </div>

        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email"placeholder="Please Enter Your Email"/>
        </div>

        <div class="form-group">
            <label>Donation amount</label>
            <input type="text" name="amount" />
        </div>

        


        <input class="submit" name="submit" style="width:80px;" type="submit" value="Submit"/><input class="submit" style="width:80px;" type="reset" value="Reset"/>
        <br><br>
        <button>
            <a href="homepage.html">Back to home Page</a>
        </button>
    </form>
</div>
</div>





    <!-- Boostrap JavaScript -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/all.min.js"></script>
    <script src="js/custom.js"></script>
</body>
</html>