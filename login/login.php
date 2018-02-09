<?php
 session_start();
if (isset($_SESSION['CurrentUser']))
	{header ('location: ../management/index.php');}

?>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="../css/bootstrap.css">
<link rel="stylesheet" href="../css/creative.css">

<link rel="icon" href="../favicon.jpg" type="image/jpeg"/>
<link rel="shortcut icon" href="../favicon.jpg" type="image/jpeg"/>

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<html lang="es">
<head>
<title>Login</title>
</head>
<body>
<center>
<h2>Administration Page</h2>

 <div class="container">

 <center> <strong>This page is for ideas tek admin users only.<br><br> 
 I am not an admin </strong> <br> <a href="../index.php" class="btn btn-tras"> take me to the main website </a> </center> <br>
 <div style="border-bottom:1px solid black"></div> <br>
 </div>
 <br>
<h3>Ideas-tek Account</h3>
 <form action="login.php" method="post">

 <div class="input-group col-md-6 col-md-offset-1">
  <span class="input-group-addon" id="basic-addon1"> <span class="glyphicon glyphicon-user" style="color:#ff851b;"></span> </span>
  <input type="text" name="mail" placeholder="E-mail" class="form-control" required>
 </div>

 <div class="input-group col-md-6 col-md-offset-1">
  <span class="input-group-addon" id="basic-addon1">   <span class="glyphicon glyphicon-lock" style="color:#ff851b;"></span> </span> </span>
  <input type="password" name="password" placeholder="password" class="form-control" required>
 </div>
 <br><br>
 	<input type="submit" name="login" value="Login" class="btn btn-tras" >
 </form>
 
 <?php
include("../connection/connection.php");

if(isset($_POST['login'])) {
	$mail = $_POST['mail'];
	$password = md5($_POST['password']);
	$sql="SELECT * FROM users WHERE mail='".$mail."' AND password='".$password."' LIMIT 1";
	$res=$conn->query($sql);

	if($res->num_rows == 1){
	 $_SESSION['CurrentUser']=$mail;
	 ?>
	 <br><br>
		<div class="container">
			<div class="alert alert-success" role="alert">
			Éxito! ya has iniciado tu sesión.
  <a href="../management/index.php" class="alert-link">Administrar Pagina.</a>
</div>

		</div>
	<?php
	header('location: ../management/index.php');
	}

	else {
		?>
		<br><br>
		<div class="container">
		<div class="alert alert-danger alert-dismissible fade in" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button> <h4>Oh no!</h4> <p> Tu usuario o contraseña son inválidos, intenta de nuevo. </p> </div>
		</div>
		<?php
	}
}
?>

 </center>

</body>
</html>
