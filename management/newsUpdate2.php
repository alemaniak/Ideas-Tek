<?php
include("../connection/connection.php");
$id=$_GET['id'];
$id2=$id;
if(isset($_POST['update'])){
	$newtitle=$_POST['Ntitle'];
	$newshort=$_POST['Nshort'];
	$newnew=$_POST['Nnew'];
	$sql2="UPDATE news SET title='".$newtitle."', shortdesc='".$newshort."', content='".$newnew."' WHERE id=".$id2;
	$res2=$conn->query($sql2);
	header('location: newsManager.php');
}
else{}
?>