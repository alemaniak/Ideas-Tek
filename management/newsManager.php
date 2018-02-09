<?php
include("../login/seter.php");
include("../connection/connection.php");
include("navbarManage.php");
?>
<html>
 <head>
  <title>News Manage</title>
  </head>
 <body>
<div class="container">
<center><h2>News Manager</h2></center>

<div class="col-md-3" style="border: 1px solid black">
<center><h3>Add a new</h3></center> <hr>
<form action="newsInsert.php" method="post" enctype="multipart/form-data">
<input type="text" name="title" placeholder="Title" class="form-control" required><br>
<textarea rows="5" name="shortdesc" cols="30" placeholder="Short description" class="form-control" required></textarea><br>

Content:
<textarea rows="5" name="content" id="content" cols="30" placeholder="Content" class="form-control" required></textarea><br>
<script>
                CKEDITOR.replace( 'content' );
            </script>
 Select an image:
<input type="file" name="fileToUpload" id="fileToUpload" required> 
    <br>
<input type="submit" name="submit" value="Add" class="btn btn-primary">
</form>
</div>
<div style="border-bottom: 1px solid black"></div>

<div class="col-md-9">
<center><h3>All The News</h3> </center> <hr>
<div style="padding:5%;">

<table class="table table-striped table-hover">
<thead>
<tr> <th><strong> Options </strong></th> <th><strong>Title</strong></th> <th><strong>Short Description</strong></th> <th><strong> Content </strong></th> <th><strong>Date</strong></th> </tr>
</thead>

<?php 
$sql = "SELECT * FROM news ORDER BY datet DESC";
$result = $conn->query($sql);
$counter=1;
if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        echo "<tr> <td><a href='' data-toggle='modal' data-target='#myModal".$counter."'><span class='glyphicon glyphicon-remove'></span></a> &emsp; <a href='newsUpdate.php?id=".$row['id']."'><span class='glyphicon glyphicon-pencil'></span></a></td> <td>".$row["title"]."</td> <td>".$row["shortdesc"]."</td> <td>".$row["content"]."</td> <td>".$row["datet"]."</td> </tr>";
        
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
          <p>You are about to permanently delete this video, are you sure?</p>
        </div>
        <div class="modal-footer">
          <a class="btn btn-danger" href=<?php echo "'newsDelete.php?id=".$row['id']."'"; ?>>Yes, Delete</a>
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
</table>
</div>
</div>

</div>
</body>
</html>
