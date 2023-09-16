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
            <img src="./assets/img/logo.png" alt="">
        
    </div>
    <div class="box2">
            <h3 style="text-align:center">PG NAME</h3></br>
            <h4>Display Price</h4>
            <hr>
            <h5>Room Details</h5>
        <li>Lorem ipsum dolor, sit amet consectetur adipisicing.
        </li>
        <li>Lorem ipsum dolor, sit amet consectetur adipisicing.
        </li>
        <li>Lorem ipsum dolor, sit amet consectetur adipisicing.
        </li>
        <li>Lorem ipsum dolor, sit amet consectetur adipisicing.
        </li>
        
    </div>

         </div>
</div>
<?php include 'footer.php';?>
</body>
</html>