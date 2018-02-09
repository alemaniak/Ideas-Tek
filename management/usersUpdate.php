<?php
include("../login/seter.php");
if ($_SESSION['CurrentUser']=='admin'){}
else{
  header('location: index.php');
}
?>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="../css/bootstrap.css">
<link rel="stylesheet" href="../css/creative.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<html>
<head>
<title>Changing Password</title>
<CENTER><h1>Change password</h1></CENTER>
</head>
<div class="container">
<div style="padding:10%; padding-top:3%;">
<?php 
include("../connection/connection.php");
$id=$_GET['id'];
$id2=$id;
$sql="SELECT * FROM users WHERE id=".$id2;
$result = $conn->query($sql);

while($row = $result->fetch_assoc()){
	echo"
	<form action='usersUpdate2.php?id=".$id2."' method='post'>
	<H3> <strong> E-mail:</strong> ".$row['mail']." </h3> <br>
	<strong> New password:</strong> <input type='password' name='newpassword' placeholder='Password' class='form-control' required><br>
<input type='submit' name='update' value='Update' class='btn btn-primary'>
</form>";
}
/*
if(isset($_POST['update'])){
	$newpassword=$_POST['newpassword'];
	$newrol=$_POST['rol'];
	$sql2="UPDATE users SET password='".sha1($newpassword)."', rol='".$newrol."' WHERE id=".$id2;
	$res2=$conn->query($sql2);
	header('location: usersManage.php');
}
else{}
*/

?>
</div>
</div>
</html>