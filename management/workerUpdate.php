<?php
include("../Login/seter.php");
?>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="../css/bootstrap.css">
<link rel="stylesheet" href="../css/creative.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="ckeditor/ckeditor.js"></script>

<html>
<head>
<title>Update info</title>
<CENTER><h1>Updating Info</h1></CENTER>
</head>
<div class="container">
<div style="padding:10%; padding-top:3%;">
<?php 
include("../connection/connection.php");
$id=$_GET['id'];
$id2=$id;
$sql="SELECT * FROM workers WHERE id=".$id2;
$result = $conn->query($sql);

while($row = $result->fetch_assoc()){
	echo "
	<form action='workerUpdate2.php?id=".$id2."' method='post'>
    <strong> Title:</strong> <input type='text' name='Ntitle' placeholder='' class='form-control' value='".$row['name']."' required><br>
    <strong> Description:</strong> <textarea name='Ndesc' id='Ndesc' cols='30' placeholder='' class='form-control'>".$row['description']."</textarea><br>
<input type='submit' name='update' value='Update' class='btn btn-primary'>
</form>";
}
?>
<script>
    CKEDITOR.replace( 'Ndesc' );
</script>
</div>
</div>
</html>
