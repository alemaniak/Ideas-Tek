<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="../css/bootstrap.css">
<link rel="stylesheet" href="../css/creative.css">

<link rel="icon" href="../favicon.jpg" type="image/jpeg"/>
<link rel="shortcut icon" href="../favicon.jpg" type="image/jpeg"/>

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<!-- TEXT EDITOR -->
<script src="ckeditor/ckeditor.js"></script>
<html lang="en">

 <div class="navbar navbar-inverse navbar-fixed-top" >
 <div class="container-fluid">
 <div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                 </button>
                    <a class="navbar-brand" style="margin-top:0px;" runat="server" href="index.php"><span class="glyphicon glyphicon-wrench"></span>Main Menu</a>
  </div>
  <div class="navbar-collapse collapse"> 
  <ul class="nav navbar-nav">
                        <li><a runat="server" href="newsManager.php"><strong><span class="glyphicon glyphicon-bullhorn"></span> News </strong></a></li>
                        <?php
                        if ($_SESSION['CurrentUser']=='admin'){
                        ?>
                        <li><a runat="server" href="usersManage.php"><strong><span class="glyphicon glyphicon-user"></span> Users </strong></a></li>
                        <?php
                        }
                        ?>
                        <li><a runat="server" href="workerManager.php"><strong><span class="glyphicon glyphicon-text-size"></span> Workers </strong></a></li>
  </ul>
  <ul class="nav navbar-nav navbar-right">
         <li><a href="../index.php"> Go to website</a></li>
         <li> <?php echo "<a href=''>".$_SESSION['CurrentUser']."</a>"; ?> </li>
         <li><a runat="server" href="../login/logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout </a> </li>                       
  </ul>
  </div>

 </div>
 </div>
</html>
