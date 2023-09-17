<?php  include('dbconn.php');   ?>
<?php
 
  $state_id = $_POST["state"];
//  echo '<script>console.log('$state_id')</script>'; 
 $sql = "SELECT DISTINCT city FROM properties where state = '$state_id'";  
 $result = mysqli_query($con, $sql);
//  $result = mysqli_query($con,"SELECT DISTINCT city FROM properties where state = $state_id");
?>

<option value="">Select City</option>
<?php
while($row = mysqli_fetch_array($result)) {
?>
 <option value="<?php echo $row["city"];?>"><?php echo $row["city"];?></option>
<?php
}
?>