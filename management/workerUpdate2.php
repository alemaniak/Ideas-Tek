<?php
include("../connection/connection.php");
$id2=$_GET['id'];

if(isset($_POST['update'])){
	$newtitle=$_POST['Ntitle'];
	$newdesc=$_POST['Ndesc'];
	$sql2="UPDATE workers SET name='".$newtitle."', description='".$newdesc."' WHERE id=".$id2;
	$res2=$conn->query($sql2);
	header('location: workerManager.php');
}
else{}
?>
