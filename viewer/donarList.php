<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title></title>
  <link rel="stylesheet" href="../css/manage.css">
</head>
<body>
    <div id="wrapper">
        <div id="header">
            <h1>Donar List</h1>
        </div>
        <div id="main-content">
    <h2>All Records</h2>
    <table cellpadding="7px">
        <?php
    include '../dbconnection.php';

    $sql = "SELECT * from donate";
    $result = mysqli_query($conn,$sql) or die("Query Failed");

    if(mysqli_num_rows($result)>0){
        

    ?>
        <thead>
            
            <th>Name</th>
            <th>Email</th>
            <th>amount</th>
        </thead>
        <?php 
        while($row = mysqli_fetch_assoc($result)){

        ?>
        <tbody>
            <tr>
                <td><?php echo $row['donar_name']; ?></td>
                <td><?php echo $row['donar_email']; ?></td>
                <td><?php echo $row['d_ammount']; ?></td>
                
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
