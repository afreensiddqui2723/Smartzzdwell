<?php
include('dbconn.php'); 
session_start();
header("Cache-Control: no cache");
session_cache_limiter("private_no_expire");
if(!empty($_POST['submitted'])){
    $_SESSION['state'] = $_POST['state'];  
    $_SESSION['city'] = $_POST['city']; 
    $state = $_SESSION['state'];  
    $city = $_SESSION['city']; 
    $flag = false;
    $sql2 = "SELECT * from properties WHERE (state='$state' AND city='$city')";  
        $result2 = mysqli_query($con, $sql2);  
          
        $count = mysqli_num_rows($result2);
        if($count<=0){
            $flag = true;
        }
        else{
            if(!isset($_SESSION["userId"])){
                $actual_link = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
	            $_SESSION["url"] = $actual_link;
                header("Location: signin.php");
            }
        }

}else{
    header("Location: findproperty.php");
}
// if (!isset($_SESSION["userId"])){
// 	$actual_link = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
// 	$_SESSION["url"] = $actual_link;
// 	header("Location: signin.php");
// }
// $sql = "select * from properties";  
// $result = mysqli_query($con, $sql); 

?>
<html>
</head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
<style>
.divider-text {
    position: relative;
    text-align: center;
    margin-top: 15px;
    margin-bottom: 15px;
}
.divider-text span {
    padding: 7px;
    font-size: 14px;
    position: relative;   
    z-index: 2;
}
.divider-text:after {
    content: "";
    position: absolute;
    width: 100%;
    border-bottom: 1px solid #ddd;
    top: 55%;
    left: 0;
    z-index: 1;
}

.btn-facebook {
    background-color: #405D9D;
    color: #fff;
}
.btn-twitter {
    background-color: #42AEEC;
    color: #fff;
}

label{
    font-weight: 700px;
    margin: 5px 5px;
   
}

.input-group-prepend{
    border: 1px solid black;
}
@media (min-width: 200px) and (max-width: 700px) {
form .input-group{
	margin-left: -70px;
	width: 40vh;
}

form label{font-size: 14px !important;}
form .form-control{font-size: 14px !important; }
form .form-control input{font-size: 14px !important;
}
}
 @media (min-width: 700px) and (max-width: 2000px) {

                }
</style>


<?php include 'head.php';?>

</head>
<body>
<?php include 'tophead.php';?>
<?php include 'header.php';?>
<body>
<div class="container">
<div class="card bg-light">
<article class="card-body mx-auto" style="max-width: 600px;">
	<!-- <h4 class="card-title mt-3 text-center">Create Account</h4>
	<p class="text-center">Get started with your free account</p>
	<p>
		<a href="" class="btn btn-block btn-twitter"> <i class="fab fa-twitter"></i>   Login via Twitter</a>
		<a href="" class="btn btn-block btn-facebook"> <i class="fab fa-facebook-f"></i>   Login via facebook</a>
	</p>-->
	<p class="divider-text">
        <span class="bg-light">Find property</span>
    </p> 
	<form style="width: 50vw;" action="checkit.php" method="POST">
	<input type='hidden' name='submitted' id='submitted' value='1'/>
	<div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input name="name" class="form-control" placeholder="Full name" type="text">
    </div> <!-- form-group// -->
    


    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
		</div>
		
    	<input name="phone" class="form-control" placeholder="Phone number" type="phone"> 
    </div> <!-- form-group// -->

    <div class="form-group input-group">
    	<div class="input-group-prepend">
        <span class="input-group-text"> <i class="fa fa-arrow-circle-right"></i> </span>
		</div>
        <label for="price" style=" margin-left:10px;">Select Price: </label>
		<select class="form-control" name= "price">
			<option value="Under ₹1,000">Under ₹1,000</option>
            <option value="₹1,000 - ₹5,000">₹1,000 - ₹5,000</option>
            <option value="₹5,000 - ₹10,000">₹5,000 - ₹10,000</option>
            <option value="₹10,000 - ₹20,000">₹10,000 - ₹20,000</option>
            <option value="Over ₹20,000">Over ₹20,000</option>
			
		</select>
	</div>
    <div class="form-group input-group">
    	<div class="input-group-prepend">
        <span class="input-group-text"> <i class="fa fa-arrow-circle-right"></i> </span>
		</div>
        <label for="rooms" style=" margin-left:10px;">24X7 Entry: </label> 
		<select class="form-control" name="entry">
			<option value="Yes"> Yes</option>
			<option value="No">No</option>
		</select>
	</div>
    <div class="form-group input-group">
    	<div class="input-group-prepend">
        <span class="input-group-text"> <i class="fa fa-arrow-circle-right"></i> </span>
		</div>
        <label for="furnished" style=" margin-left:10px;">Modulation: </label>
		<select class="form-control" name= "modulation">
			<option value="Furnished">Furnished</option>
            <option value="Semi furnished">Semi furnished</option>
			<option value="Not furnished">Not furnished</option>
		</select>
	</div>
    <div class="form-group"> 
        <button type="submit" class="btn btn-success btn-block"> Find Property </button>
    </div> <!-- form-group// -->      
                                                                 
</form>
</article>
</div> <!-- card.// -->

</div> 
<!--container end.//-->
<?php
if($flag){
    echo '<script type="text/javascript">
    $(document).ready(function() {
        swal({
    title: "No Properties!",
    text: "Sorry No Properties Exist. Kindly try later.",
    icon: "error",
    button: "Ok",
    timer: 5000
   });
    });
    window.setTimeout(function(){
        window.location="findproperty.php";
      }, 5000);
   </script>';
  }
?>
<br><br><?php include 'footer.php';?>
<!-- <script>
	$(document).ready(function() {
		$('#state-dropdown').on('change', function() {
			var state_id = this.value;
			// alert(state_id);

            $.ajax({
                url: "findcity.php",
                type: "POST",
                data: {
                    state: state_id
                },
                cache: false,
                success: function(result){
                    $("#city-dropdown").html(result);
                }
            });
         
         
    });
	});

</script> -->
</body></html>