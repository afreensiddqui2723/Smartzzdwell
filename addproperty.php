<?php  include('dbconn.php');   ?>
<?php
session_start();
if (!isset($_SESSION["userId"])){
	$actual_link = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
	$_SESSION["url"] = $actual_link;
	header("Location: signin.php");
}

if( isset($_POST['submitted']) ){
	echo '<script>alert("Welcome to Geeks for Geeks")</script>';
    $username = $_POST['name'];  
    $address = $_POST['address'];  
    $phone = $_POST['phone'];  
    $homeType = $_POST['homeType'];  
    $state = $_POST['state'];  
    $city = $_POST['city'];  
    $rooms = $_POST['rooms'];  
    $girls = $_POST['girls'];  
    $price = $_POST['price'];  
    $kitchen = $_POST['kitchen'];  
    $hall = $_POST['hall'];  
    $parking = $_POST['parking'];  
    $modulation = $_POST['modulation'];  
    $image_file=$_FILES['image']['name'];
	$file = $_FILES['image']['tmp_name'];
 	// $path = $folder . $image_file;  
 	//$target_file=$folder.basename($image_file);
 	//$imageFileType=pathinfo($target_file,PATHINFO_EXTENSION);
	//Allow only JPG, JPEG, PNG & GIF etc formats
	// if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
	// && $imageFileType != "gif" ) {
	// $error[] = 'Sorry, only JPG, JPEG, PNG & GIF files are allowed';   
	// echo 'Sorry, only JPG, JPEG, PNG & GIF files are allowed';
	// }
	//Set image upload size 
	
		if ($_FILES["image"]["size"] > 5048576) {
	$error[] = 'Sorry, your image is too large. Upload less than 5 MB in size.';
	echo 'Sorry, your image is too large. Upload less than 5 MB in size.';
	}
	if(!isset($error))
	{
		$img = file_get_contents($file);
		$imageData = base64_encode($img);
      
        //to prevent from mysqli injection  
       
		$sql = "INSERT INTO properties (name, address, phone, homeType, state, city, noOfRooms, 
		girls, price, kitchen, hall, parking, modulation, images) VALUES 
		('$username','$address','$phone','$homeType','$state','$city','$rooms',
		'$girls','$price','$kitchen','$hall','$parking','$modulation', '$imageData')";  
		$result = mysqli_query($con, $sql);  
		// $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
		// $count = mysqli_num_rows($result);  
		  
		if($result){  
			echo '<script>alert("Property Added Successfully")</script>'; 
		}  
		else{  
			echo '<script>alert(Error, Please try again)</script>';  
		} 
       
	}
}
?>

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

.btn-upload{
	background-color: #59ab6e !important;
    border-color: #56ae6c !important;
	color: white;
	border-radius: 5px;
	width: 100px;
}

a{
	color: #59ab6e !important;
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
        <span class="bg-light">Add your property</span>
    </p> 
	<form style="width: 40vw;" method="POST" enctype="multipart/form-data">
	<input type='hidden' name='submitted' id='submitted' value='1'/>
	<div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input name="name" class="form-control" placeholder="Full name" type="text">
    </div> <!-- form-group// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-home"></i> </span>
		 </div>
        <input name="address" class="form-control" placeholder="Address" type="text">
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
        <label for="home" style=" margin-left:10px;">Home type: </label>
		<select class="form-control" name= "homeType">
			<option value="Separate"> Separate</option>
			<option value="Mix">Mix</option>
		</select>
	</div>

	<div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-arrow-circle-right"></i> </span>
		</div>
        <label for="home" style=" margin-left:10px;">State: </label>
		<select class="form-control" name= "state">
			<option value="Uttar Pradesh"> Uttar Pradesh</option>
			<option value="Madhya Pradesh">Madhya Pradesh</option>
		</select>
	</div>

	<div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-arrow-circle-right"></i> </span>
		</div>
        <label for="home" style=" margin-left:10px;">City: </label>
		<input name="city" class="form-control" placeholder="City" type="text">
		<!-- <select class="form-control" name= "home">
			<option>Aligarh</option>
			<option>Delhi</option>
		</select> -->
	</div>
    
    <div class="form-group input-group">
    	<div class="input-group-prepend">
        <span class="input-group-text"> <i class="fa fa-arrow-circle-right"></i> </span>
		</div>
        <label for="rooms" style=" margin-left:10px;">No. of rooms: </label> 
		<select class="form-control" name="rooms">
			<option value="1"> 1</option>
			<option value="2">2</option>
            <option value="3"> 3</option>
			<option value="4">4</option>
		</select>
	</div>

	<div class="form-group input-group">
    	<div class="input-group-prepend">
        <span class="input-group-text"> <i class="fa fa-arrow-circle-right"></i> </span>
		</div>
        <label for="rooms" style=" margin-left:10px;">Suitable for girls: </label> 
		<select class="form-control" name="girls">
			<option value="Yes"> Yes</option>
			<option value="No">No</option>
		</select>
	</div>

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
        <label for="kitchen" style=" margin-left:10px;">Kitchen: </label>
		<select class="form-control" name= "kitchen">
			<option value="Available">Available</option>
			<option value="Not Available">Not Available</option>
		</select>
	</div>


    <div class="form-group input-group">
    	<div class="input-group-prepend">
        <span class="input-group-text"> <i class="fa fa-arrow-circle-right"></i> </span>
		</div>
        <label for="hall" style=" margin-left:10px;">Hall: </label>
		<select class="form-control" name= "hall">
			<option value="Available">Available</option>
			<option value="Not Available">Not Available</option>
		</select>
	</div>

    <div class="form-group input-group">
    	<div class="input-group-prepend">
        <span class="input-group-text"> <i class="fa fa-arrow-circle-right"></i> </span>
		</div>
        <label for="parking" style=" margin-left:10px;">Parking: </label>
		<select class="form-control" name= "parking">
			<option value="Car">Car</option>
			<option value="Bike">Bike</option>
            <option value="Both">Both</option>
		</select>
	</div>

    <div class="form-group input-group">
    	<div class="input-group-prepend">
        <span class="input-group-text"> <i class="fa fa-arrow-circle-right"></i> </span>
		</div>
        <label for="furnished" style=" margin-left:10px;">Modulation: </label>
		<select class="form-control" name= "modulation" >
			<option value="Furnished">Furnished</option>
            <option value="Semi furnished">Semi furnished</option>
			<option value="Not furnished">Not furnished</option>
		</select>
	</div>
  
	<div class="form-group input-group">
    	<div class="input-group-prepend">
        <span class="input-group-text"> <i class="fa fa-arrow-circle-right"></i> </span>
		</div>
        <label for="UploadPhotos" style=" margin-left:10px;">Upload Photos: </label>
		<input type="file"  name="image" accept="image/*" required>
  		<input type="submit" class="btn-upload" value="Upload">
	</div>


	<div class="form-group input-group">
    	
		<input type="checkbox" id="terms" name="terms"  required>&nbsp&nbsp&nbsp
    			<a href="tnc.html" target="popup" 
  onclick="window.open('tnc.html','popup','width=600,height=600'); return false;"> * I agree to the terms and conditions </a>
	</div>

			
    <!-- <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		</div>
        <input class="form-control" placeholder="Create password" type="password">
    </div> form-group// -->
    <!-- <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		</div>
        <input class="form-control" placeholder="Repeat password" type="password">
    </div>                                       -->
    <div class="form-group"> 
        <button type="submit" class="btn btn-success btn-block"> Add Property </button>
    </div> <!-- form-group// -->      
                                                                 
</form>
</article>
</div> <!-- card.// -->

</div> 
<!--container end.//-->

<br><br><?php include 'footer.php';?>
</body></html>