<!DOCTYPE html>
<html lang="en">
<head>
<?php
include('html_includes/headcontent.php');
?>
<title>Ideas-Tek Home</title>
</head>

<body id="page-top">
 <?php
include('html_includes/navbarmenu.php');
?>
<div id="phone">
 <header>
        <div class="header-content">
            <div class="header-content-inner">
                 <br><br><br><br><br><br><br><br>
                <h2>INNOVATION & DEVELOPMENT IN AEROSPACE SYSTEMS</h2>
                <hr>
                <h2>Innveting for a smarter world!</h2>
            </div>
        </div>
    </header>
</div>

<div id="desktop">
<div class="header-content-inner" id="article" style="text-shadow:2px 2px 2px black, -2px -2px 0px black, -2px 2px 2px black, 2px -2px 2px black;">
               <br><br><br><br><br><br><br><br>
                <h2>INNOVATION & DEVELOPMENT IN AEROSPACE SYSTEMS</h2>
                <hr>
                <h2 style=" font-style: italic;">Innveting for a smarter world!</h2>
               <!-- <a href="#about" class="btn btn-primary btn-xl page-scroll">Find Out More</a>-->
</div>
<video autoplay id="video-background" muted>
  <source src="vid/vid2.mp4" type="video/mp4">
</video>
</div>

    <section class="no-padding" id="portfolio">
        <div class="container-fluid">
            <div class="row no-gutter">
                <div class="col-lg-4 col-sm-6">
                    <a href="weare.php" class="portfolio-box">
                        <img src="img/portfolio/1.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">

                                <div class="project-name">
                                    Who We Are
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="wedo.php" class="portfolio-box">
                        <img src="img/portfolio/2.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">

                                <div class="project-name">
                                    What We Do
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="#" class="portfolio-box">
                        <img src="img/portfolio/3.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">

                                <div class="project-name">
                                    Who We Serve
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1 class="section-heading">The Latest</h1>
                    <hr class="primary">
                </div>
            </div>
        </div>

<div id="slideshow">
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

<div class="carousel-inner" role="listbox">
<?php
include('connection/connection.php');
$sql = "SELECT * FROM news ORDER BY datet DESC limit 3";
$result = $conn->query($sql);
$counter=1;
if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {

        if ($counter == 1){
    $class = "active";
}
else {
    $class = "";
}
 echo "<div class='item ".$class."'>";
        ?>
        <img <?php echo "src='management/latestimgs/".$row['imgURL']."'"; ?>  width="100%" class="img-responsive">
            <div class="carousel-caption">
                <h2><?php echo $row['title'] ?></h2>
                <p><?php echo $row['shortdesc'] ?></p>
            </div>
      </div>
        <?php
    $counter++;
            }
    }
?>
</div>
    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<div id="phone">
<div class="container-fluid">
    <?php
$sql = "SELECT * FROM news ORDER BY datet DESC limit 1";
$result = $conn->query($sql);
if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        ?>
        <div class="img-responsive header-img" <?php echo "style=background-image:url('management/latestimgs/".$row['imgURL']."');"; ?> id="img">
             <div id="header-transparent">
                <h1 style="color:white;"><?php echo $row['title'] ?></h1>
                <hr>
                <h2 style="color:white;"><?php echo $row['shortdesc'] ?></h2>
                <p style="color:white;"><?php echo $row['datet'] ?></p>
              </div>
            </div>

        <?php
            }
    }
?>

        </div>
</div>
    </section>



<!-- Facebook share
<section id="media" style="margin-top:-5%;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1 class="section-heading">The Latest on social media</h1>
                    <hr class="primary">
                </div>
            </div>
        </div>
</section>

    <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8&appId=432842800173139";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="row">
    <div class="col-md-4">
        <div class="fb-post" data-href="https://www.facebook.com/upsoclvideo/videos/1348817698474615/" data-width="auto" data-show-text="true"><blockquote cite="https://www.facebook.com/photo.php?fbid=10155033547428767&amp;set=a.461396123766.267163.715558766&amp;type=3" class="fb-xfbml-parse-ignore"></blockquote></div>
    </div>
</div>
<br>
-->

</body>
<div  style="margin-top:-10%;">
<?php
include('html_includes/scriptsinhtml.php');
include('html_includes/footer.php');
?>
</div>
</html>
