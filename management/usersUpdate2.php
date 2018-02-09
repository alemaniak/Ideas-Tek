<?php
include('../login/seter.php');
if ($_SESSION['CurrentUser']=='admin'){}
else{
  header('location: index.php');
}
include("../connection/connection.php");
$id=$_GET['id'];
$id2=$id;

if(isset($_POST['update'])){
	$newpassword=$_POST['newpassword'];
	$newrol=$_POST['rol'];
	$sql2="UPDATE users SET password='".md5($newpassword)."' WHERE id=".$id2;
	$res2=$conn->query($sql2);
	header('location: usersManage.php');
}
else{}
?>