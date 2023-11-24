<?php
session_start();
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
	<form style="width: 50vw;" action="findpropertynextstep.php" method="POST">
	<input type='hidden' name='submitted' id='submitted' value='1'/>
	


    
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-arrow-circle-right"></i> </span>
		</div>
        <label for="home" style=" margin-left:10px;">State: </label>
		<select class="form-control" name= "state" id="state-dropdown">
		<option value="">Select State</option>
		<option value="Uttar Pradesh"> Uttar Pradesh</option>
			<option value="Madhya Pradesh">Madhya Pradesh</option>
		</select>
	</div>

	<div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-arrow-circle-right"></i> </span>
		</div>
        <label for="home" style=" margin-left:10px;">City: </label>
		<select class="form-control" name= "city" id="city-dropdown">
			<!-- <option>Aligarh</option>
			<option>Delhi</option> -->
		</select>
	</div>

    <div class="form-group"> 
        <button type="submit" class="btn btn-success btn-block"> Check Property </button>
    </div> <!-- form-group// -->      
                                                                 
</form>
</article>
</div> <!-- card.// -->

</div> 
<!--container end.//-->

<br><br><?php include 'footer.php';?>
<script>
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

</script>
</body></html>