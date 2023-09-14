<?php  include('dbconn.php');   ?>
<?php      
   if( isset($_POST['submitted']) ){
    $username = $_POST['email'];  
    $password = $_POST['password'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = md5(mysqli_real_escape_string($con, $password));  
      
        $sql = "insert into users (email,password) values('$username','$password')";  
        $result = mysqli_query($con, $sql);  
        // $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        // $count = mysqli_num_rows($result);  
          
        if($result){  
            echo "<h1><center> Register successful </center></h1>";  
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        } 
   }
       
?>
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

    <form action="" method="POST">
    <input type='hidden' name='submitted' id='submitted' value='1'/>
      <input type="email" id="login" class="fadeIn second" name="email" placeholder="Enter Email" required>
      <input type="password" id="password" class="fadeIn third" name="password" placeholder="password" required>
      <input type="submit" class="fadeIn fourth" name="Submit" value="Sign Up" style="margin-top:10px">
      
    </form>

    <div id="formFooter">
    <a class="underlineHover" href="signin.php" style="color: #000">Already have an account? Sign In</a><br/>
      <a class="underlineHover" href="#" style="color: #000">Forgot Password?</a>
    </div>

  </div>
</div> 

<?php include 'footer.php';?>
</body>
</html>
