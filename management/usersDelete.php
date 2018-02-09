<?php
include("../login/seter.php");
if ($_SESSION['CurrentUser']=='admin'){}
else{
  header('location: index.php');
}
include("../connection/connection.php");

$id=$_GET['id'];

$sql = "DELETE FROM users WHERE id=".$id;
$result = $conn->query($sql);
   header('location: usersManage.php');
?>