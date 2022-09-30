<?php 

session_start();

$server = "localhost";
$user = "root";
$pass = "madeeha";
$database = "waste_db";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Collector</title>
    <link rel="stylesheet" href="style11.css">
    
</head>
<body>

<div class="container">
 <div class="row">
   <div class="col-sm-8">
    <div class="table-responsive">
      <table class="table table-bordered">
       <thead><tr>
         <th>ID</th>
         <th>Name</th>
         <th>Email</th>
         <th>Address</th>
         <th>Waste Type</th>
         <th>Date/Time</th>
    </thead>
    <tbody>

    <?php

$location = $_SESSION['location'];

$query = "SELECT * from requests WHERE address = '$location'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
  $sn=1;
  while($data = mysqli_fetch_assoc($result)) {
 ?>
      <tr>
      <td><?php echo $sn; ?></td>
      <td><?php echo $data['name']??''; ?></td>
      <td><?php echo $data['email']??''; ?></td>
      <td><?php echo $data['address']??''; ?></td>
      <td><?php echo $data['waste_type']??''; ?></td>
      <td><?php echo $data['date_time']??''; ?></td>
     </tr>
     <?php
  $sn++;}} else { ?>
    <tr>
     <td colspan="8">No data found</td>
    </tr>
 <?php } ?>
    </tbody>
     </table>
   </div>
</div>
</div>
</div>
  

<p class= "logout"><a href="logout.php"> Logout </a></p>

    
</body>
</html>