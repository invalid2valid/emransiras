<?php 
$conn = mysqli_connect('localhost','root','','dfrom');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.min.css"/>
    <title>result</title>
</head>
<body>
    <div class="container">
        <table>
            <th>SL</th>
            <th>Name</th>
            <th>Roll</th>
            <th>Date</th>
            <?php
              $query=  "SELECT * FROM `form`";
              $result = mysqli_query($conn,$query);
              while($res = mysqli_fetch_array($result)){
                ?> <tr>
                    <td><?php echo $res ['sl'];?> </td>
                    <td><?php echo $res ['name'];?> </td>
                    <td><?php echo $res ['roll'];?> </td>
                    <td><?php echo $res ['date'];?> </td>
                </tr> 
                <?php
              }
            ?>
        </table>
    </div>
</body>
</html>