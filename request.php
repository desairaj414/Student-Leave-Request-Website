<?php
include"dbconfig.php"  
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request Info</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>

    <form action="success.php" method="POST">
        <input class="btn" type="submit" value="Pending Requests">
    </form>
    <br><br>

    <div class="container">
    <br><br>
    <center>
    <table border=2>
    
        <tr>

            <th>
                Request ID
            </th>

            <th>
                Student ID
            </th>

            <th>
                Student Name
            </th>

            <th>
                Leave Start Date
            </th>

            <th>
                Leave End Date
            </th>

            <th>
                Leave Reason
            </th>

            <th>
                Leave Type
            </th>

            <th>
                Photo ID
            </th>

            <th>
                Leave Reason
            </th>

            <th>
                No. of Days
            </th>

        </tr>
    
    
        <?php
        $reqID = $_POST["reqid"];
        $sql = "SELECT * FROM `studentattendance` WHERE `reqid`=$reqID";
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) > 0) 
        {
            while($row = mysqli_fetch_assoc($result)) 
            {
                $reqid = $row["reqid"];
                $studid = $row["studid"];
                $studname = $row["studname"];
                $startdate = $row["startdate"];
                $enddate = $row["enddate"];
                $reason = $row["reason"];
                $type = $row["type"];
                $photo = $row["photo"];
                $daysno = $row["daysno"];
                $status = $row["status"];
            
        ?>

        <tr>
            <td>
            <?php echo $reqid; ?>
            </td>

            <td>
            <?php echo $studid; ?>
            </td>

            <td>
            <?php echo $studname; ?>
            </td>

            <td>
            <?php echo $startdate; ?>
            </td>

            <td>
            <?php echo $enddate; ?>
            </td>

            <td>
            <?php echo $reason; ?>
            </td>

            <td>
            <?php echo $type; ?>
            </td>

            <td>
            <?php echo '<img src="data:image;base64,'.base64_encode($row['photo']).'" style="width:100px; height:100px;">';?>
            </td>

            <td>
            <?php echo $daysno; ?>
            </td>

            <td>
            <?php echo $status; ?>
            </td>

        </tr>


<?php

            }
        }
        mysqli_close($conn);

?>


    </table>
    </center>
    <br><br>

    </div>

        <br><br>

    <form action="approve.php" method="post">
        <input type="hidden" value="<?php echo $reqid ?>" name="reqid">
        <input class="btn" type="submit" value="Approve">
    </form><br>
    
    <form action="reject.php" method="post">
        <input type="hidden" value="<?php echo $reqid ?>" name="reqid">
        <input class="btn" type="submit" value="Reject">
    </form>


</body>
</html>