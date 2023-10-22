<?php      
    // $host = "localhost";  
    // $user = "u869925871_smartzzdwell";  
    // $password = 'Smartzzdwell2023';  
    // $db_name = "u869925871_smartzzdwell";  
    $host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "smartzzdwell";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
?>  