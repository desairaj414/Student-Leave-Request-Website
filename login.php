<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Login</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>

    <?php
    session_start();
    $_SESSION['username']='teacher123';
    $_SESSION['password']='root';
    ?>

        <form action="home.html" method="POST">
            <input class="btn" type="submit" value="Student Leave Apply">
        </form>
    <br><br>

    <div class="container">
    
        <br>

        <h1>Student Leave/Attendence System </h1>
        <h2>Teacher Login Area</h2>

    <form action='<?php echo"logger.php?PHPSESSID=".session_id()?>' method="POST">

        <br/>

        <label for="uname">Teacher Username: </label>
        <input id="uname" type="text" name="uname" required> <br><br>
        
        <label for="upass">Teacher Password: </label>
        <input id="upass" type="password" name="upass" required> <br><br>
        
        <!--<label id="submitter" for="final"></label>-->
        <input class="btn" type="submit">
        <br/><br/>
                    
    </form>
</div>

</body>
</html>