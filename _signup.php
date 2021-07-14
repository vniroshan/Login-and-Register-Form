<?php
session_start();
include "db.php";

   $username = trim($_POST['username']);
   $email = trim($_POST['email']);
   $password1 = trim($_POST['password1']);
   $password2 = trim($_POST['password2']);
   $address = trim($_POST['address']);
   $isValid = true;

   // Check fields are empty or not
   if($username == '' || $email == '' || $password1 == '' || $password2 == '' || $address=='' || $contactnumber= ''){
      $isValid = false;
     $_SESSION['messages'][]='Please fill all required fields!';
header('location: signup.php');
exit;
   }

   // Check if confirm password matching or not
   if($isValid && ($password1 != $password2) ){
     $isValid = false;
     
     $_SESSION['messages'][]='Confirm password not matching';   
   header('location: signup.php');
   exit;
   }

   // Check if Email-ID is valid or not
   if ($isValid && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
     $isValid = false;
     $_SESSION['messages'][]='Invalid Email-ID.';   
   header('location: signup.php');
   exit;
   }

if($isValid){

     // Check if Email-ID already exists
     $stmt = $conn->prepare("SELECT * FROM user WHERE username = :un");
     $stmt->bindParam(':un', $username);
     $stmt->execute();
     if($stmt->rowCount() > 0){
       $isValid = false;
       $_SESSION['messages'][]='User Name is already existed.';   
   header('location: signup.php');
   exit;
     }

   }

   if($isValid){

     // Check if Email-ID already exists
     $stmt = $conn->prepare("SELECT * FROM user WHERE email = :em");
     $stmt->bindParam(':em', $email);
     $stmt->execute();
     if($stmt->rowCount() > 0){
       $isValid = false;
       $_SESSION['messages'][]='Email-ID is already existed.';   
   header('location: signup.php');
   exit;
     }

   }

   // Insert records
   if($isValid){
     $insertSQL = "INSERT INTO user(username,email,password1,address) values(:un,:em,:pss,:add)";
     $stmt = $conn->prepare($insertSQL);
     $stmt->bindParam(':un',$username);
     $stmt->bindParam(':em',$email);
     $stmt->bindParam(':pss',$password1);
     $stmt->bindParam(':add',$address);
     $stmt->execute();
     
     $_SESSION['messages'][]='Thank you for your registration.!';
header('location: login.php');
exit; 
}
?>