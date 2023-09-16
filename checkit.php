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
            width:25vw;
            height: 70vh;
            border: 2px black solid;
            margin: 5px 5px;
            padding:5px 5px;
            border-radius: 10px;
        
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
            height:25vh;
            width:100%;
            
        }
        @media (min-width: 200px) and (max-width: 700px) {
            .class-row{
            display:flex;
            flex-direction: column;
            justify-content:center;
            align-items:center;
           
        }
        .box{
            width: 25vw;
            height: 50vh;
            border: 2px black solid;
            margin: 5px 5px;
            padding:5px 5px;
            border-radius: 10px;

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
            <h3 style="text-align:center">PG NAME</h3></br>
            <h4>Display Price</h4>
            <hr>
        <h5>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni, blanditiis in nostrum veritatis molestiae nobis?
        </h5>
        
    </div>

    
         </div>
</div>

<?php include 'footer.php';?>
</body>
</html>