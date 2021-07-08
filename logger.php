<?php

    include"dbconfig.php";

    $uname = $_POST["uname"];
    $upass = $_POST["upass"];
    $username = "";
    $password = "";
    session_start();


    $sql = "SELECT `username`, `password` FROM `authenticateuser`";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0) 
    {
        while($row = mysqli_fetch_assoc($result)) 
        {
           $username = $row["username"];
           $password = $row["password"];
        }
    }   


    if($username == $uname && $password == $upass)
    {
        header("Location: success.php");
    }
    elseif($_SESSION['username'] == $uname && $_SESSION['password'] == $upass)
    {
        header("Location: success.php");
    }
    else
    {
        header("Location: login.php");
    }
    mysqli_close($conn);

    ?>
