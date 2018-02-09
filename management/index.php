<?php
include("../connection/connection.php");
include("../login/seter.php");
include("navbarManage.php");
?>

<!DOCTYPE html>
<html>
 <head>
  <title>Administrador de BTS LTDA</title>
  </head>
 <body>
 <center><h2>Administrador de BTS LTDA</h2></center>
 <div class="container" style="text-align:center; padding:5%;">

<div class="col-md-4" style="padding: 5%;">
<a href="newsManager.php"><span class="glyphicon glyphicon-bullhorn" style="font-size:55px;" ></span> <br>
	News Administration <br></a>
</div>
<?php
if ($_SESSION['CurrentUser']=='admin'){
?>
<div class="col-md-4" style="padding: 5%;">
  <a href="usersManage.php"><span class="glyphicon glyphicon-user" style="font-size:55px;"></span> <br>
  Users Administration<br></a>
</div>
<?php
}
else{}
?>

<div class="col-md-4" style="padding: 5%;">
  <a href="workerManager.php"><span class="glyphicon glyphicon-text-size" style="font-size:55px;"></span> <br>
 Workers Administration<br></a>
</div>

</div>
</div>
</body>
</html>
