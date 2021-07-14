<!DOCTYPE html>
<head>
<title>signup</title>
    <link rel="stylesheet" type="text/css" href="style.css">
<link rel = "icon" href ="images/logo.png"type = "image/x-icon"> 
</head>
<body style="background-color: #81BEF7 ">
    <div class="box">
        <img src="images/user.png" class="user">
        <h1>Register Here</h1>
        <?php require_once 'messages.php'; ?>
        <form name="myform2" action="_signup.php" method="POST" enctype="multipart/form-data">
            <p>Username</p>
            <input type="text" name="username" placeholder="Enter Username">
            <p>Email</p>
            <input type="Email" name="email" placeholder="Enter email id">
            <p>Password</p>
            <input type="password" name="password1" placeholder="Enter Password">
            <p>Retype Password</p>
            <input type="password" name="password2" placeholder="Re-Enter Password">
            <p>Address</p>
            <input type="text" name="address" placeholder="Enter Address">
            <input class="submit" type="submit" name="btnsignup" value="Register">
        </form>
        <form action="index.php">
            <input class="close"   type="submit" name="" value="Close"> 
            <br><br>
            <a href="login.php">existing user, login !?</a>
        </form>
    </div>
</body>
</html>