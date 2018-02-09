<?php
include("../login/seter.php");
if ($_SESSION['CurrentUser']=='admin'){}
else{
  header('location: index.php');
}
include("../connection/connection.php");
$name=$_POST['name'];
$mail=$_POST['mail'];
$password=$_POST['password'];
$rol=$_POST['rol'];
$sql = "INSERT INTO users VALUES('','".$name."','".$mail."','".md5($password)."')";
$result = $conn->query($sql);
   header('location: usersManage.php');
?>