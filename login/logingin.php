<?php
session_start();
include("../connection/connection.php");

if(isset($_POST['login'])) {
	$mail = $_POST['mail'];
	$password = md5($_POST['password']);
	$sql="SELECT * FROM users WHERE mail='".$mail."' AND password='".$password."' LIMIT 1";
	$res=$conn->query($sql);
	if($res->num_rows == 1){
	 //$_SESSION['CurrentUser']=$username;
	header('location: ../Management/index.php');
	}

	else {
		?>
		<br><br>
		<center style='color:red;'>Invalid Username Or Password <a href='login.php'>Try Again</a></center>
		<?php
	}
}
?>