<!DOCTYPE html>
<?php
include('connection/connection.php');
?>
<html lang="en">

<head>
<?php
include('html_includes/headcontent.php');
?>
<title>Conctact Us</title>
</head>

<body id="contact">
 <?php
include('html_includes/navbarmenu.php');
?>


<div class="img-responsive header-img" style="background-image:url('img/portfolio/contactheader.jpg');"; id="img">
             <div>
               <div class="col-lg-8 col-lg-offset-2 text-center">
                   <h2 class="section-heading">Let's Get In Touch!</h2>
                   <hr class="primary">
                   <p>Ready to start your project with us? That's great! Give us a call or send us an email and we will get back to you as soon as possible!</p>
               </div>
               <div id="desktop">

                </div>
              </div>
            </div>
    <br><br>

     <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Our Mailing Address</h2>
                    <hr class="primary">
                    <p>IDEAS Engineering & Technology, LLC <br>
                       2350 Alamo Ave. SE, Suite 220 <br>
                       Albuquerque, NM 87106</p>
                </div>
                <div class="col-lg-4 col-lg-offset-2 text-center">
                    <i class="fa fa-phone fa-3x wow bounceIn"></i>
                    <p><a href='tel:505-933-5675'>(505) 933-5675</a></p>
                </div>
                <div class="col-lg-4 text-center">
                    <i class="fa fa-envelope-o fa-3x wow bounceIn" data-wow-delay=".1s"></i>
                    <p><a href="mailto:info@ideas-tek.com">info@ideas-tek.com</a></p>
                </div>
            </div>
        </div>
    </section>

<div class="container">
  <form action="contact_message.php" method="post">
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" class="form-control" name="name" id="name" placeholder="Enter your full name" required>
    </div>

    <div class="form-group">
      <label for="company">Company</label>
      <input type="text" class="form-control" name="company" id="company" placeholder="Enter company name" required>
    </div>

    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" required>
    </div>

   <div class="form-group">
      <label for="phone">Phone</label>
      <input type="tel" class="form-control" name="number" id="number" placeholder="Enter your phone" required>
    </div>

    <div class="form-group">
      <label for="subject">Subject</label>
      <input type="text" class="form-control" name="subject" id="subject" placeholder="Message subject" required>
    </div>

    <div class="form-group">
      <label for="subject">Message</label>
      <textarea rows="5" name="message" id="message" cols="30" placeholder="Write a message for us" class="form-control"></textarea>
    </div>
    <script type="text/javascript">
                         var a = Math.ceil(Math.random() * 10);
                         var b = Math.ceil(Math.random() * 10);
                         var c = a + b;
                         function DrawBotBoot() {
                             document.write("<input class='form-control' placeholder='What is " + a + " + " + b + "?' required id='BotBootInput'  onKeyUp='ValidBotBoot(this.value)' type='text' required/><br /><br /><br /> ");
                         }

                         function ValidBotBoot(z) {
                            var cansubmit = true;
                             var d = document.getElementById('BotBootInput').value;
                             if (z == c)
                             {
                              var sub = document.getElementById('submitbutton');
                              sub.disabled=false;
                              return true;
                           }
                             else
                             {
                              var sub = document.getElementById('submitbutton');
                              sub.disabled=true;
                              return false;}
                           }
                      </script>
                            <strong>Prove you are human </strong>
                            <br>

                            <script type="text/javascript">DrawBotBoot()</script>

    <input type="submit" name="submit" value="Send" class="btn btn-primary btn-xl page-scroll" id="submitbutton" disabled="disabled">
  </form>

  <br><br>
</div>
</body>
<?php
include('html_includes/scriptsinhtml.php');
include('html_includes/footer.php');
?>
</html>

<style></style>
