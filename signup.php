<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'stylecss.php';?>

<style>



</style>
<?php include 'head.php';?>
</head>
<body>
<?php include 'tophead.php';?>
<?php include 'header.php';?>

   
<div class="wrapper fadeInDown">
  <div id="formContent">

    <div class="fadeIn first">
      <img src="assets/img/logo.png" id="icon"  width= "100px" height= "200px"/>
    </div>

    <form>
      <input type="email" id="login" class="fadeIn second" name="login" placeholder="Enter Email" required>
      <input type="password" id="password" class="fadeIn third" name="login" placeholder="password" required>
      <input type="submit" class="fadeIn fourth" value="Sign Up" style="margin-top:10px">
      
    </form>

    <div id="formFooter">
    <a class="underlineHover" href="signin.php" style="color: #000">Not have an account? Sign in</a><br/>
      <a class="underlineHover" href="#" style="color: #000">Forgot Password?</a>
    </div>

  </div>
</div> 

<?php include 'footer.php';?>
</body>
</html>