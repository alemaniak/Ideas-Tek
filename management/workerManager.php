<?php 
include("../connection/connection.php");
include("../login/seter.php");
include("navbarManage.php");
?>
<html>
 <head>
  <title>Who we are Manager</title>
  </head>
  <body>
  <div class="container">
<center>
<h1>Who We Are Manager</h1>
  <div class="col-md-12" style="border: 1px solid black">
  <h3>Add New</h3>
<form action="workerUploader.php" method="post" enctype="multipart/form-data">
    <input type="text" name="name" placeholder="Name" class="form-control" required><br>
    Description:
    <textarea rows="5" name="description" id="description" cols="30" placeholder="Description" class="form-control" required></textarea><br>
    <script>
      CKEDITOR.replace( 'description' );
    </script>
    Select a profile picture:
    <input type="file" name="fileToUpload" id="fileToUpload" required> 
    <br>

    <input type="submit" name="submit" value="Upload" class="btn btn-primary">
</form>

<br>
</div>
</center>

<br>

<center>
<h1> The Team </h1> <br><br>
<?php 
$sql = "SELECT * FROM workers ORDER BY id DESC";
$result = $conn->query($sql);
$counter=1;
if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        echo "<center><div class='col-md-12'> <strong>Name:</strong> ".$row["name"]."<hr> ".$row['description']."<br> <img src='workersimgs/".$row["photo"]."' width='100' Class='img-responsive'>  <br> <a href='workerUpdate.php?id=".$row['id']."' class='btn btn-default'>Update</a> <a href='workerImageUpdate.php?id=".$row['id']."' class='btn btn-default'>Update  Image</a> <a href='' class='btn btn-danger' data-toggle='modal' data-target='#myModal".$counter."'>Delete</a> <br><br>  <div style='border-bottom:1px solid black;'> <br><br></div> </div></center><br><br>";
    ?>
<!-- Modal -->
  <div class="modal fade" <?php echo "id='myModal".$counter."'" ?> role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Warning</h4>
        </div>
        <div class="modal-body">
          <p>You are about to permanently delete this image and description, are you sure?</p>
        </div>
        <div class="modal-footer">
          <a class="btn btn-danger" href=<?php echo "'workerDelete.php?id=".$row['id']."'"; ?>>Yes, Delete</a>
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        </div>
      </div>
      
    </div>
  </div>

    <?php
    $counter++;



    }
} else {
    echo "0 results";
}
$conn->close();
?>
</center>


 </div>
</body>
</html>
