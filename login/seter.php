<?php
session_start();
if (isset($_SESSION['CurrentUser']))
	{}

else {header ('location: ../login/login.php');}
?>