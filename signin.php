<?php      
    include('dbconn.php'); 
    session_start(); 
    if( isset($_POST['submitted']) ){
    $username = $_POST['email'];  
    $password = $_POST['password'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = md5(mysqli_real_escape_string($con, $password));  
      
        $sql = "select * from users where email = '$username' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            // echo "<h1><center> Login successful </center></h1>"; 
            $_SESSION["userId"] = $row['id'];
            if(isset($_SESSION["url"]))
            header("Location: " . $_SESSION["url"]);

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
@media (min-width: 200px) and (max-width: 700px) {
#formContent{
  padding: 40px;
  margin-top:60px;
}
#formFooter a{
  font-size:12px;
}

}
 @media (min-width: 700px) and (max-width: 2000px) {
  #formContent{
  padding: 40px;
  margin-top:60px;
}
                }

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
      <input type="email" id="login" class="fadeIn second" name="email" placeholder="Enter Email" required>
      <input type="password" id="password" class="fadeIn third" name="password" placeholder="password" required>
      <input type="submit" class="fadeIn fourth" name="submitted" value="Sign In" style="margin-top:10px">
      
    </form>

    <div id="formFooter">
    <a class="underlineHover" href="signup.php" style="color: #000">Need an account? Sign Up</a><br/>
      <a class="underlineHover" href="#" style="color: #000">Forgot Password?</a>
    </div>

  </div>
</div> 

<?php include 'footer.php';?>
</body>
</html>
