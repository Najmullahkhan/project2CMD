<?php
session_start();
require("connection.php");

if(isset($_POST["btn"]))
{
  $name =  $_POST["name"];
  $email =  $_POST["email"];
  $password =  $_POST["password"];
  $select   = "SELECT * FROM `registered` WHERE `Email` = '$email'";
  $data = mysqli_query($connection,$select);
  if(mysqli_num_rows($data)> 0)
  {
    header("location: Registered.php?error=Email already registered");
    exit();
  }else{
  $query = "INSERT INTO `registered`(`Name`, `Email`, `Password`) VALUES ('$name','$email','$password')";
  mysqli_query($connection,$query);
  header("location: Login.php?success=Registered successfully");
  exit();
  }

}
if(isset($_POST["login_btn"]))
{
  $email=$_POST["email"];
  $password=$_POST["password"];
  $select="SELECT * FROM `registered` WHERE `Email` = '$email' AND  `PASSWORD`='$password'";
  $data = mysqli_query($connection,$select);
  if(mysqli_num_rows($data)>0) 
  {
    $_SESSION["emaill"] = $email;
    header("location:layout.php");
  }else{
    header("location:login.php?error=Email or Password is incorrect");
  }
}



?>
