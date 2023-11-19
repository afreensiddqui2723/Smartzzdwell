<?php
include('dbconn.php'); 
session_start(); 
if( isset($_POST['submitted']) ){
  $name = $_POST['name']; 
  $email = $_POST['email']; 
  $phone = $_POST['phone']; 
  $message = $_POST['message']; 
  $to = "support@smartzdwell.com";
  $subject = "Contact us Query";
  $txt = "New Query\n Name: ". $name."\nEmail: ".$email."\nPhone: ".$phone."\nMessage: ".$message;
  $headers = "From: support@smartzdwell.com" . "\r\n";
  
  mail($to,$subject,$txt,$headers);
}
?>
<html lang="en">
    <head>
<?php include 'head.php';?>
</head>
<body>
<?php include 'tophead.php';?>
<?php include 'header.php';?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">

<h3 class="text-center">Contact us</h3><br />

<div class="row">
  <div class="col-md-8">
      <form action="" method="post">
        <input class="form-control" name="name" placeholder="Name..." /><br />
        <input class="form-control" name="phone" placeholder="Phone..." /><br />
        <input class="form-control" name="email" placeholder="E-mail..." /><br />
        <textarea class="form-control" name="message" placeholder="How can we help you?" style="height:150px;"></textarea><br />
        <input class="btn btn-primary" type="submit" name="submitted" value="Send" /><br /><br />
      </form>
  </div>
  <div class="col-md-4">
    <b>Inquiry:</b> <br />
    Phone: +91 7817 833 477<br />
    E-mail: <a href="mailto:support@mysite.com">info@smartzdwell.com</a><br />
    <br /><br />
    <b>Headquarter:</b><br />
    Company HK Litd, <br />
    25/F.168 Queen<br />
    District, Aligarh<br />
    Phone: +91 7817 833 477<br />
    <a href="mailto:usa@mysite.com">info@smartzdwell.com</a><br />


    <br /><br />
    <b>Aligarh:</b><br />
    Company HK Litd, <br />
    25/F.168 Queen<br />
    District, Aligarh<br />
    Phone: +91 7817 833 477<br />
    <a href="mailto:hk@mysite.com">info@smartzdwell.com</a><br />


  </div>
</div>

</div>


<?php include 'footer.php';?>

</body>

</html>