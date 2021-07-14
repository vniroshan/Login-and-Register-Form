<!DOCTYPE html>
<head>
<title>Home</title>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel = "icon" href ="images/logo.png"type = "image/x-icon"> 
</head>
<body style="background-color: #81BEF7 ">

<?php 
    include "db.php";
    session_start(); 

    if(!isset($_SESSION['email'])){
    header("Location:login.php");
    exit(); 
}
    if(isset($_SESSION["email"])){
    $query = "SELECT * FROM user WHERE email = :em";
    $statement = $conn->prepare($query);
    $params = array('em' => $_SESSION["email"]);
    $statement->execute($params);
    $user_data = $statement->fetch();
    $_SESSION['myname'] = $user_data['username'];
    $_SESSION['myaddress']=$user_data['address'];
    }
 ?> 

    <div class="box">
        <h1>Home</h1>
        <h1 style="color: yellow;"><?php echo $_SESSION['myname']; ?></h1>
        <h1 style="color: yellow;"><?php echo $_SESSION['myaddress']; ?></h1>
        <form action="logout.php">
            <input class="close"   type="submit" name="" value="Logout"> 
        </form>
    </div>
</body>
</html>