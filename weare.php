<!DOCTYPE html>
<?php
include('connection/connection.php');
?>
<html lang="en">

<head>
<?php
include('html_includes/headcontent.php');
?>
<title>Who We Are</title>
</head>

<body id="weare">
 <?php
include('html_includes/navbarmenu.php');
?>

<div class="img-responsive header-img" style="background-image:url('img/portfolio/1b.jpg');"; id="img">
             <div>
                <h1 style="color:white;">Who We Are</h1>
               <div id="desktop">
                <hr>
                <p style="color:white;">IDEAS Engineering & Technology (IDEAS-TEK) is a small business dedicated
                  to the development of innovative and cost-effective solutions for aerospace, medical, and other
                  mission critical applications. IDEAS-TEK provides unmatched digital design, embedded systems engineering,
                  and software development services to our private customers and the US Government. Our solutions range from
                  full custom and proprietary designs of digital systems to open hardware/software designs provided to the
                  community for development and experimentation.
                 </p>
                </div>
              </div>
            </div>
    <br><br>
 <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1 class="section-heading">Our Team</h1>
                    <hr class="primary">
                    <br><br><br>
                </div>
            </div>
        </div>
<div class="container">
<?php
$sql = "SELECT * FROM workers ORDER BY id DESC";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    ?>
<div class="quotes">
        <div class="row">
            <div class="container-fluid">
            <center>
             <div class="col-md-3">
             <?php
                echo "
                <div style='padding-top:50%;'>
                <img src='management/workersimgs/".$row['photo']."' class='img-responsive'>
                </div>";
             ?>
             </div>
             <div class="col-md-9">
                 <h2><?php echo $row['name']; ?></h2>
                 <hr>
                 <p>
                     <?php echo $row['description']; ?>
                 </p>
             </div>
            </center>
            </div>
        </div>
    </div>
    <br><br>

    <?php
    }
} else {
    echo "0 results";
}
$conn->close();
?>
</div>
</body>
<?php
include('html_includes/scriptsinhtml.php');
include('html_includes/footer.php');
?>
</html>
