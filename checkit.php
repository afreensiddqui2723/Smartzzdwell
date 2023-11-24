<?php      
    include('dbconn.php'); 
    session_start(); 
   
    if(!empty($_POST['submitted'])){
        // $_SESSION['name'] = $_POST['name'];  
        // $_SESSION['phone']= $_POST['phone']; 
        // $_SESSION['state'] = $_POST['state'];  
        // $_SESSION['city'] = $_POST['city']; 
        $_SESSION['price'] = $_POST['price'];  
        $_SESSION['modulation'] = $_POST['modulation'];
        $username = $_POST['name'];  
    $phone = $_POST['phone'];
    $state = $_SESSION['state'];  
    $city = $_SESSION['city']; 
    $price = $_POST['price'];  
    $modulation = $_POST['modulation']; 
    if(isset($username) && isset($phone)){

        $sql = "INSERT INTO request (name,phone) values('$username','$phone')";  
            $result = mysqli_query($con, $sql); 
    }
    header('Location: checkit.php');
    }else{
        //header('Location: checkit.php')
        $state = $_SESSION['state'];  
    $city = $_SESSION['city']; 
    $price = $_SESSION['price'];  
    $modulation = $_SESSION['modulation']; 
    }
    // $username = $_POST['email'];  
    // $password = $_POST['password'];  
      
    //     //to prevent from mysqli injection  
    //     $username = stripcslashes($username);  
    //     $password = stripcslashes($password);  
    //     $username = mysqli_real_escape_string($con, $username);  
    //     $password = md5(mysqli_real_escape_string($con, $password));  
//     $username = $_POST['name'];  
//     $phone = $_POST['phone']; 
//     $state = $_POST['state'];  
//     $city = $_POST['city']; 
//     $price = $_POST['price'];  
//     $modulation = $_POST['modulation']; 
// if(isset($username) && isset($phone)){

//     $sql = "INSERT INTO request (name,phone) values('$username','$phone')";  
//         $result = mysqli_query($con, $sql); 
// }
        $sql2 = "SELECT * from properties WHERE (price='$price' AND modulation = '$modulation') AND (state='$state' AND city='$city') ORDER BY price";  
        $result2 = mysqli_query($con, $sql2);  
          
        $count = mysqli_num_rows($result2);  
        
          
        // if($count >= 1){  
        //     // echo "<h1><center> Login successful </center></h1>"; 
        //     // $_SESSION["userId"] = $row['id'];
        //     // if(isset($_SESSION["url"]))
        //     // header("Location: " . $_SESSION["url"]);

        // }  
        // else{  
        //     echo "<h1> No Data Found</h1>";  
        // } 
       
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Details </title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
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
            height: 55vh;
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
            margin-top: 10px;
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
        a:hover{
            text-decoration: none;
        }
        @media (min-width: 200px) and (max-width: 700px) {
            .class-row{
                margin-top: 55vh;
                margin-bottom: 35vh;
            display:flex;
            flex-direction: column;
            justify-content:center;
            align-items:center;
           
        }
        .box{
            width: 90vw;
            height: 50vh;
            border: 2px black solid;
            margin: 5px 5px;
            padding:5px 5px;
            border-radius: 10px;

        }
        .class-container{
            margin-top: 35vh;
            background-color: white;
            width:100vw;
            height: 100%;
            margin: 2px 2px;
            padding:2px 2px;
            margin-bottom: 60vh;
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
        <?php 
         if($count >= 1){  
            while($row = mysqli_fetch_array($result2, MYSQLI_ASSOC)){ 
        ?>
        
            <div class="box">
            <a href="Details.php?idd=<?php echo $row['id'] ?>">
            <!-- <a > -->
            <!-- <img src="./assets/img/logo.png" alt=""> -->
            <img src="data:image/png;base64,<?php echo $row['images'] ?>" alt="">
            <h3 style="text-align:center"><?php echo $row['name'] ?></h3></br>
            <h4><?php echo $row['price'] ?></h4>
            <hr>
        <h5>
        City: <?php echo $row['city'] ?>
        </h5>
        <h5>
        State: <?php echo $row['state'] ?>
        </h5>
        
    </a>
    </div>
    <?php }}else{
        echo "<h1> No Data Available</h1>"; 
    } ?>

    
         </div>
</div>

<?php include 'footer.php';?>
<script>
// $(document).ready(function(){
//     // $(".box").bind('click', $.proxy(function(event) {
//     //         var status = $(event.target).attr('id');
//     //       alert(status);
//     // }, this));
//     $('.box').click(function(event) {
//     var status = $(this).attr('id');
//     //<?php //$_SESSION["boxId"] = ?>status;
//     alert(status);
//     // window.location = "./Details.php";
//     $.ajax({
//                 url: "Details.php",
//                 type: "POST",
//                 data: {
//                     id: status
//                 },
//                 cache: false,
//                 success: function(result){
//                     window.location = "./Details.php";
//                 }
//             });
    
// });
// });
</script>
</body>
</html>