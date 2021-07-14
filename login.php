<!DOCTYPE html>
<head>
<title>Login</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background-color: #81BEF7 ">
    <div class="box">
    <img src="images/user.png" class="user">
        <h1>Login Here</h1>
        <?php require_once 'messages.php'; ?>
        <form name="myform"  action="_login.php" method="POST" >
            <p>Email</p>
            <input type="Email" name="email" placeholder="Enter Email Address " required="">
            <p>Password</p>
            <input type="password" name="password1" placeholder="Enter Password" required="">
            <input class="submit" type="submit" name="" value="Login">
        </form>
        <form action="welcome.php">
            <input class="close"   type="submit" name="" value="Close"> 
            <br><br>
            <a href="signup.php">Register for new account ?</a> 
        </form>   
    </div>
</body>
</html>