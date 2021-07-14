<!DOCTYPE html>
<head>
<title>Welcome</title>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel = "icon" href ="images/logo.png"type = "image/x-icon"> 
</head>
<body style="background-color: #81BEF7 ">
<?php 
    include "db.php";
    session_start(); 
     if(isset($_SESSION['email'])){
    header("Location:index.php");
    exit(); 
    }
 ?> 
    <div class="box">
        <h1>Wellcome</h1>
        <form action="login.php">
            <input class="submit" type="submit" value="Login">
        </form>
        <form action="signup.php">
            <input class="submit" type="submit" value="Register">
        </form>
    </div>
</body>
</html>