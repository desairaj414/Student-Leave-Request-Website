<?php  include"dbconfig.php"  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In Succesful</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
<form action="home.html" method="post">
		<input class="btn" type="submit" value="Go to HomePage">
    </form>
    <br><br>

    <div class="container"> 
    <br>
    <h1>Pending Leave Requests</h1>

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
            Photo
        </th>

        <th>
            No. of Days
        </th>

        <th>
            Status
        </th>

    </tr>

    <?php
    $sql = "SELECT * FROM `studentattendance`  WHERE `status`='Pending' ";
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
    ?>
</table>
</center>


 
<br><br>
<form action="request.php" method="post">

        <label for="reqid">Request ID: </label>       
        <input id="reqid" type="text" name="reqid" required> <br><br><br>
        
        <!--<label id="submitter" for="final"></label>-->
        <input class="btn" type="submit">

</form>
<br><br>

<h1>All Leave Requests</h1>

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
            Photo
        </th>

        <th>
            No. of Days
        </th>

        <th>
            Status
        </th>

    </tr>

    <?php
    $sql = "SELECT * FROM `studentattendance`";
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

</body>
</html>