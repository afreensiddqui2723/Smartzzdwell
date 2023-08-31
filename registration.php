
<link<!DOCTYPE html>
<html lang="en">
    <head>
   
<style>
    .divider-text {
    position: relative;
    text-align: center;
    margin-top: 15px;
    margin-bottom: 15px;
}
.divider-text span {
    padding: 7px;
    font-size: 12px;
    position: relative;   
    z-index: 2;
}

.card {
    border-radius: 10px;
box-shadow: 5px 5px 10px black;
width: 500px;

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
.a {
color: black;
}
/* 
.btn-facebook {
    background-color: #405D9D;
    color: #fff;
}
.btn-twitter {
    background-color: #42AEEC;
    color: #fff;
} */


@media (min-width: 200px) and (max-width: 700px) {
              .card bg-light {
               width: 400px;
              }
                }
                @media (min-width: 700px) and (max-width: 2000px) {
                .card bg-light {
               width: 900px;
              }
                /* @media (min-width: 900px) and (max-width: 900px) {
                  .resp{
                  display: none;
                } */
                }
</style>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">

<?php include 'head.php';?>
</head>
<body>
<?php include 'tophead.php';?>
<?php include 'header.php';?>

<div class="container">
<br>  <hr>





<div class="card bg-light">
<article class="card-body mx-auto" style="max-width: 400px;">
	<h4 class="card-title mt-3 text-center">Create Account</h4>
	<!-- <p class="text-center">Get started with your free account</p>
	<p>
		<a href="" class="btn btn-block btn-twitter"> <i class="fab fa-twitter"></i>   Login via Twitter</a>
		<a href="" class="btn btn-block btn-facebook"> <i class="fab fa-facebook-f"></i>   Login via facebook</a>
	</p> -->
	<p class="divider-text">
        <span class="bg-light">OR</span>
    </p>
	<form>
	<div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input name="" class="form-control" placeholder="Full name" type="text">
    </div> 
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
		 </div>
        <input name="" class="form-control" placeholder="Email address" type="email">
    </div> 
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
		</div>
		<!-- <select class="custom-select" style="max-width: 120px;">
		    <option selected="">+971</option>
		    <option value="1">+972</option>
		    <option value="2">+198</option>
		    <option value="3">+701</option>
		</select> -->
    	<input name="" class="form-control" placeholder="Phone number" type="text">
    
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-building"></i> </span>
		</div>
		<select class="form-control">
			<option selected=""> Select room type</option>
			<option>1 BHK</option>
			<option>2BHK</option>
			<option>3BHK</option>
		</select>
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		</div>
        <input class="form-control" placeholder="Create password" type="password">
    </div> 
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		</div>
        <input class="form-control" placeholder="Repeat password" type="password">
    </div>
    
    <div class="form-group">
    <b><p>Please upload any ID proof</p></b>
    <input type="file" id="myFile" name="filename">
    </div>                                    
    <div class="form-group" style="margin-top:10px;">
        <button type="submit" class="btn btn-success btn-block"> Create Account  </button>
    </div>       
    <p class="text-center" style="margin-top:10px;">Have an account? <a href="login.php" style="color:green;">Log In</a> </p>                                                                 
</form>
</article>
</div> 

</div> 


<br><br>


<?php include 'footer.php';?>

</body>

</html> 
