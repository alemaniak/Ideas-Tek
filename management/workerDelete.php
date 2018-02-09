<?php
include("../login/seter.php");
include("../connection/connection.php");

$id=$_GET['id'];

$sqlu = "SELECT * FROM workers WHERE id=".$id;
$resultu = $conn->query($sqlu);

if ($resultu->num_rows > 0) {

    while($row = $resultu->fetch_assoc()) {
        $file=$row['photo'];
        unlink("workersimgs/".$file);        
    }
} else {}

$sql = "DELETE FROM workers WHERE id=".$id;
$result = $conn->query($sql);

   header('location: workerManager.php');
?>
