<?php  include"dbconfig.php"  ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leave Request Acknowledgement</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <form action="home.html" method="post">
		<input class="btn" type="submit" value="Go to HomePage">
    </form>

	<br>
	<br>
	<br>

    <?php

        $stud_id = $_POST["stud_id"];
        $stud_name = $_POST["stud_name"];
        $leave_start_date = $_POST["leave_start_date"];
        $leave_end_date = $_POST["leave_end_date"];
        $leave_reason = $_POST["leave_reason"];
        $leave_type = $_POST["leave_type"];
        $days_no = $_POST["days_no"];
        $status = "Pending";

        $imgContent = addslashes(file_get_contents($_FILES["photo"]["tmp_name"]));   //For Image Upload


        $sql = "INSERT INTO `studentattendance`(`studid`, `studname`, `startdate`, `enddate`, `reason`, `type`, `photo`, `daysno`, `status`) VALUES ($stud_id,'$stud_name','$leave_start_date','$leave_end_date','$leave_reason','$leave_type','$imgContent', $days_no,'$status')";

        if (mysqli_query($conn, $sql)) {
        } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

        mysqli_close($conn);

    ?>

<div class="container">
<br>
<h1>Your Leave Request is submitted successfully</h1>
<br><br>
</div>

</body>
</html>