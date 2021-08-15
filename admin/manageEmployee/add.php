<?php
include '../dbconnection.php';



if(isset($_REQUEST['signup'])){
      if(($_REQUEST['name'] == "") || ($_REQUEST['username'] == "") || ($_REQUEST['email'] == "") || ($_REQUEST['gender'] == "") || ($_REQUEST['password'] == "")){
          $regmsg = '<div class="alert alert-warning mt-2" role="alert"> All Fields are Required </div>';
      }else{
            $ename=$_POST['name'];
            $eusername=$_POST['username'];
            $eemail=$_POST['email'];
            $egender=$_POST['gender'];
            $epassword=$_POST['password'];

            $sql = "insert into employee(eName,eUsername,eEmail,eGender,ePassword)
            values('{$ename}','{$eusername}','{$eemail}','{$egender}','{$epassword}')";

            $result = mysqli_query($conn,$sql) or die("Sql unsuccessful");
            $regmsg = '<div class="alert alert-success mt-2" role="alert"> Account Succefully Created </div>';

      }
}
?>

<?php
include 'header.php';      
?>
      
<div id="main-content">
    <h2 style="text-align:center;">Employee Registration</h2>
    <form class="post-form" action="" method="post">
        <!-- action=savedate.php controller/userRegistationSave.php -->
        <div class="form-group">
            <label>Full Name</label>
            <input type="text" name="name" />
        </div>


        <div class="form-group">
            <label>Username</label>
            <input type="text" name="username" />
        </div>

        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" />
        </div>

        <div class="form-group">
            <label>Gender</label>
            <select name="gender">

                <option selected disabled>Select Gender</option>
                <option value="Male">Male</option> 
                <option value="Female">Female</option>                 


            </select>
        </div>       
      
         


        <div class="form-group">
            <label>Password</label>
            <input value="" type="text" name="password" />
        </div>
        <div class="form-group">
            <label>Confirm Password</label>
            <input type="text" name="cpassword" />
        </div>


        <input class="submit" name="signup" style="width:80px;" type="submit" value="Submit"/>
        <input class="submit" style="width:80px;" type="reset" value="Reset"/>
        <?php if(isset($regmsg)) {echo $regmsg; } ?>
    </form>
</div>
</div>
</body>
</html>
