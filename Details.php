<?php      
    include('dbconn.php'); 
    session_start(); 
    $idd = $_GET['idd']; 
    //echo '<script>console.log('$idd')</script>'; 
    $sql2 = "SELECT * from properties WHERE id='$idd'";  
    $result2 = mysqli_query($con, $sql2); 
    $row = mysqli_fetch_array($result2, MYSQLI_ASSOC); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Details </title>
    <?php include 'head.php';?>
    <style>
        .class-container{
            background-color: white;
            width:100vw;
            height: 100vh;
            margin: 2px 2px;
            padding:2px 2px;
        }

        .class-row{
            display:flex;
            justify-content:center;
            flex-direction: row;
            align-items:center;
            height: 100vh;
        }

        .box{
            width:30vw;
            height: 70vh;
            margin: 5px 5px;
            padding:5px 5px;
            border: 2px solid black;
        
        }
        .box2{
            width: 70vw;
            height: 100vh;
            margin: 5px 5px;
            padding:5px 5px;
           
           margin-top:30vh;
        }
        h3{
            font-size:20px;
            font-weight: 700;
            text-align: center;
            color: black;
        }
        h5{
            font-size:18px;
            font-weight: 500;
            text-align: justify;
            color: black;
        }
        h4{
            font-size:18px;
            font-weight: 900;
            text-align: center;
            color: green;
        }
        img{
            height:60vh;
            width: 30vw;
            text-align:center;
            
        }
        @media (min-width: 200px) and (max-width: 700px) {
            .class-row{
            display:flex;
            flex-direction: column;
            justify-content:center;
            align-items:center;
           height: 100vh;
           
        }
        img{
            height:60vh;
            width: 80vw;
            text-align:center;
            
        }
        .box{
            width: 90vw;
            height: 70vh;
           border: 2px solid black;
            margin: 5px 5px;
            padding:5px 5px;
        }
        .box2{
            width: 90vw;
            height: 100vh;
          
            margin: 5px 5px;
            padding:5px 5px;
           
            margin-bottom:30vh;
        }
}

    </style>
</head>
<body>
<?php include 'tophead.php';?>
<?php include 'header.php';?>
<body>
    
<div class="class-container">
    <div class="class-row">
        <div class="box">
            <img src="data:image/png;base64,<?php echo $row['images'] ?>" alt=""> 
    </div>
    <div class="box2">
            <h3 style="text-align:center"><?php echo $row['name'] ?></h3></br>
            <h4><?php echo $row['price'] ?></h4>
            <hr>
            <h5>Room Details</h5>
        <li><b>Home Type: </b> <?php echo $row['homeType'] ?>
        </li>
        <li><b>No. of Rooms: </b> <?php echo $row['noOfRooms'] ?>
        </li>
        <li><b>Suitable for girls: </b> <?php echo $row['girls'] ?>
        </li>
        <li><b>Kitchen: </b> <?php echo $row['kitchen'] ?>
        </li>
        <li><b>Hall: </b> <?php echo $row['hall'] ?>
        </li>
        <li><b>Parking: </b> <?php echo $row['parking'] ?>
        </li>
        <li><b>Modulation: </b> <?php echo $row['modulation'] ?>
        </li>
        <li><b>City: </b> <?php echo $row['city'] ?>
        </li>
        <li><b>State: </b> <?php echo $row['state'] ?>
        </li>
        
    </div>

         </div>
</div>
<?php include 'footer.php';?>
</body>
</html>