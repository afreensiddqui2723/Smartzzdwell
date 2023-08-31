<html>
</head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
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
	<form style="width: 50vw;">
	<div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input name="" class="form-control" placeholder="Full name" type="text">
    </div> <!-- form-group// -->
    


    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
		</div>
		
    	<input name="" class="form-control" placeholder="Phone number" type="phone"> 
    </div> <!-- form-group// -->


    <div class="form-group input-group">
    	<div class="input-group-prepend">
        <span class="input-group-text"> <i class="fa fa-arrow-circle-right"></i> </span>
		</div>
        <label for="price" style=" margin-left:10px;">Select Price: </label>
		<select class="form-control" name= "price">
			<option>₹ 7500</option>
			<option>₹ 9500</option>
		</select>
	</div>

    <div class="form-group input-group">
    	<div class="input-group-prepend">
        <span class="input-group-text"> <i class="fa fa-arrow-circle-right"></i> </span>
		</div>
        <label for="furnished" style=" margin-left:10px;">Modulation: </label>
		<select class="form-control" name= "furnished">
			<option>Furnished</option>
            <option>Semi furnished</option>
			<option>Not furnished</option>
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

<br><br><?php include 'footer.php';?>
</body></html>