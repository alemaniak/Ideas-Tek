
<?php
require 'PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'alefarfich@gmail.com';                 // SMTP username
$mail->Password = 'queseroloco5589';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to
$mail->Priority = 1;
$mail->setFrom('alefarfich@gmail.com');
$mail->addAddress('alefarfich@gmail.com');     // Add a recipient optional
$mail->isHTML(true);

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $company = $_POST['company'];
    $email = $_POST['email'];
    $phone = $_POST['number'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

	$mail->Subject = 'Contact Message from Action Monitoring';
	$mail->Body    = "Message was sent from - <strong>Name:</strong> ".$name."<br>
    <strong>company:</strong> ".$company."<br>
    <strong>E-mail:</strong> ".$email."<br>
    <strong>Phone:</strong> ".$phone."<br>
    <strong>Subject:</strong> ".$subject."<br>
   <strong>Message:</strong> ".$message."<br>";

    if(!$mail->send()) {
    //echo 'Message could not be sent.';
    //echo 'Mailer Error: ' . $mail->ErrorInfo;
    header('location: failedM.php');
	}
	else {
	header('location: successM.php');
	     }


    }

    else {header('location: failedM.php');}
?>
