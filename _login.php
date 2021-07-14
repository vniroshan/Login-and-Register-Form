<?php
    include "db.php";
    session_start();
    $email=trim($_REQUEST["email"]);
    $pass=trim($_REQUEST["password1"]);

    $sql="SELECT * FROM user WHERE email=:em AND password1=:pw";
    $stmt=$conn->prepare($sql);
    $stmt->bindParam(':em',$email);
    $stmt->bindParam(':pw',$pass);
    $stmt->execute();
    
    if($stmt->rowCount()==1){  
        echo "<script>window.open('index.php','_self')</script>";
        echo "<script>window.open('welcome.php','_self')</script>";  
        $_SESSION['email']=$email;//here session is used and value of $user_email store in $_SESSION.  
    }  
    else  
    {  
      $_SESSION['messages'][]='Email or password is incorrect.!';
header('location: login.php');
exit; 
    }  
?>