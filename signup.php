<?php  include('dbconn.php');   ?>
<?php      
   if( isset($_POST['submitted']) ){
    $username = $_POST['email'];  
    $password = $_POST['password'];
    $flag = false;   
    $flag2 = false;   
    $flag3 = false;   
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = md5(mysqli_real_escape_string($con, $password));  
      
        $sql2 = "SELECT * from users WHERE email = '$username'";  
        $result2 = mysqli_query($con, $sql2);  
        $count = mysqli_num_rows($result2); 
        if($count >= 1){
          $flag = true;
          // echo '<script>alert("Email Already Exist")</script>'; 
        }else{
          $sql = "INSERT INTO users (email,password) values('$username','$password')";  
          $result = mysqli_query($con, $sql);  
          if($result){ 
            // alertjava();
            $flag2 = true; 
            // echo '<script>alert("Register Successfully")</script>'; 
            // if(isset($_SESSION["url"]))
            //   header("Location: " . $_SESSION["url"]);
            // else
            // header("Location: signin.php");
          }  
          else{  
            $flag3 = true;
            // echo '<script>alert(Error, Please try again)</script>';  
          } 
        }
        // $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        // $count = mysqli_num_rows($result);  
          
        
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
<?php
if($flag){
  echo '<script type="text/javascript">
  $(document).ready(function() {
      swal({
  title: "Signup failed!",
  text: "Email Already Exist.",
  icon: "error",
  button: "Ok",
  timer: 5000
 });
  });
 </script>';
}
if($flag2){
  echo '<script type="text/javascript">
  $(document).ready(function() {
      swal({
  title: "Signup Success!",
  text: "Registered Successfully",
  icon: "success",
  button: "Ok",
  timer: 5000
 });
  });
  window.setTimeout(function(){
  window.location="signin.php";
}, 5000);
 </script>';
      // if(isset($_SESSION["url"]))
      // {

      // }
      // else{
      //   echo '<script type="text/javascript">window.location="signin.php"</script>';
      // }
              // header("Location: " . $_SESSION["url"]);
            // else
            // echo '<script type="text/javascript">window.location="signin.php"</script>'
            // header("Location: signin.php");
}
if($flag3){
  echo '<script type="text/javascript">
  $(document).ready(function() {
      swal({
  title: "Signup failed!",
  text: "Error, Please try again",
  icon: "error",
  button: "Ok",
  timer: 5000
 });
  });
 </script>';
}
 
?>
<?php include 'footer.php';?>
</body>
</html>
