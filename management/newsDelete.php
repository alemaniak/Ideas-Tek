<?php
include("../login/seter.php");
include("../connection/connection.php");

$id=$_GET['id'];

$sqlu = "SELECT * FROM news WHERE id=".$id;
$resultu = $conn->query($sqlu);

if ($resultu->num_rows > 0) {

    while($row = $resultu->fetch_assoc()) {
        $file=$row['imgURL'];
        unlink("latestimgs/".$file);        
    }
} else {}

$sql = "DELETE FROM news WHERE id=".$id;
$result = $conn->query($sql);

   header('location: newsManager.php');
?>

?>
