<?php include 'header.php'; ?>

<div id="main-content">
    <h2>Update Record</h2>
    <?php

    include('../../dbconnection.php');
    $id=$_GET['id'];
    if($id > 0){
        $id=$_GET['id'];
    }else{
        $id=1;
    }

  
 
    $sql = "select * from user where user.uid={$id}";
    $result =mysqli_query($conn,$sql) or die("Sql Unsuccessful");
    if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_assoc($result)){
    ?>


    <form class="post-form" action="updatedata.php" method="post">
        <div class="form-group">
          <label>ID</label>
          <input type="text" name="id" value="<?php echo $row['uid']; ?>" readonly />
        </div>
      <div class="form-group">
          <label>Name</label>
          <input type="text" name="name" value="<?php echo $row['uName']; ?>"/>
      </div>
      <div class="form-group">
          <label>User Name</label>
          <input type="text" name="username" value="<?php echo $row['uUsername']; ?>"/>
      </div>
      <div class="form-group">
          <label>Email</label>
          <input type="email" name="email" value="<?php echo $row['uEmail']; ?>"/>
      </div>
      
      <div class="form-group">
          <label>Password</label>
          <input type="text" name="password" value="<?php echo $row['uPassword']; ?>"/>
      </div>
      <input name="submit" class="submit" type="submit" value="Update"/>
    </form>
    <?php
        }
    }
    ?>
    
</div>
</div>
</body>
</html>
