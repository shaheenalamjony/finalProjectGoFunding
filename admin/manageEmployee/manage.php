<?php
include 'header.php';      
?>
<div id="main-content">
    <h2>User</h2>
    <table cellpadding="7px">
        <?php
    include '../dbconnection.php';

    $sql = "select * from employee";
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
                <td><?php echo $row['eid']; ?></td>
                <td><?php echo $row['eName']; ?></td>
                <td><?php echo $row['eUsername']; ?></td>
                <td><?php echo $row['eEmail']; ?></td>
                <td><?php echo $row['eGender']; ?></td>
                <td><?php echo $row['role']; ?></td>
                <td>
                    <a href='manageEmployee/edit.php?id=<?php echo $row['eid']; ?>'>Edit</a>
                    <br><br>
                    <a href='manageEmployee/delete-inline.php?id=<?php echo $row['eid']; ?>'>Delete</a>
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