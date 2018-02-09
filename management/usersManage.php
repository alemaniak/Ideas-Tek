<?php 
include("../connection/connection.php");
include("../login/seter.php");
include("navbarManage.php");
if ($_SESSION['CurrentUser']=='admin'){}
else{
  header('location: index.php');
}
?>
<html>
 <head>
  <title>Users Manager</title>
  </head>
 <body>
<div class="container">
<center><h2>Users Manager</h2></center>
<div class="col-md-4" style="border: 1px solid black">
<center><h3>Add a new User</h3></center> <hr>
<form action="usersInsert.php" method="post">
<input type="text" name="name" placeholder="Name" class="form-control" required><br>
<input type="text" name="mail" placeholder="E-mail" class="form-control" required><br>
<input type="password" name="password" placeholder="Password" class="form-control" required><br>
<input type="submit" name="submit" value="Add" class="btn btn-primary">
</form>
</div>

<div style="border-bottom: 1px solid black"></div>

<div class="col-md-8">

<center><h3>All Users</h3></center> <hr>
<div style="padding:5%;">

<table class="table table-striped table-hover">
<thead>
<tr> <th><strong> Options </strong></th> <th><strong>Name</strong></th> <th><strong>User Email</strong></th></tr>
</thead>

<?php 
$sql = "SELECT * FROM users WHERE mail <> 'admin'";
$result = $conn->query($sql);
$counter=1;
if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        echo "<tr> <td><a href='' data-toggle='modal' data-target='#myModal".$counter."'><span class='glyphicon glyphicon-remove'></span></a> &emsp; <a href='usersUpdate.php?id=".$row['id']."'><span class='glyphicon glyphicon-pencil'></span></a></td> <td>".$row["name"]."</td> <td>".$row["mail"]."</td> </tr>";
   
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
          <p>You are about to permanently delete this user, are you sure?</p>
        </div>
        <div class="modal-footer">
          <a class="btn btn-danger" href=<?php echo "'usersDelete.php?id=".$row['id']."'"; ?>>Yes, Delete</a>
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