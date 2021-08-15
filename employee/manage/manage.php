<?php
include 'header.php';      
?>
<div id="main-content">
    <h2>User</h2>
    <table cellpadding="7px">
        <?php
    include '../dbconnection.php';

    $sql = "select * from user";
    $result = mysqli_query($conn,$sql) or die("Query Failed");

    if(mysqli_num_rows($result)>0){
        

    ?>
        <thead>
            <th>User_Id</th>
            <th>Name</th>
            <th>Username</th>
            <th>Email</th>
            <th>Gender</th>
            <th>Role</th>
            <th>Action</th>
        </thead>
        <?php 
        while($row = mysqli_fetch_assoc($result)){

        ?>
        <tbody>
            <tr>
                <td><?php echo $row['uid']; ?></td>
                <td><?php echo $row['uName']; ?></td>
                <td><?php echo $row['uUsername']; ?></td>
                <td><?php echo $row['uEmail']; ?></td>
                <td><?php echo $row['uGender']; ?></td>
                <td><?php echo $row['role']; ?></td>
                <td>
                    <a href='manage/edit.php?id=<?php echo $row['uid']; ?>'>Edit</a>
                    <br><br>
                    <a href='manage/delete-inline.php?id=<?php echo $row['uid']; ?>'>Delete</a>
                </td>
            </tr>
            <?php
                }
            ?>
        </tbody>

    </table>
    <?php } 
    mysqli_close($conn);
    ?>
</div>
</div>


</body>

</html>