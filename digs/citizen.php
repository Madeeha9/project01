<?php 

session_start();

$server = "localhost";
$user = "root";
$pass = "madeeha";
$database = "waste_db";
$tableName = "requests";

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
    <title>Citizen</title>
    <link rel="stylesheet" href="style11.css">


</head>
<body>

<!--form php -->
<?php 


error_reporting(0);

session_start();

if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$email1 = $_Post['email'];
	$address = $_POST['address'];
	$waste_type = $_POST['waste_type'];
	$date_time = $_POST['date_time'];
  $email = $_SESSION['email'];

  if($email1 == $email){

		
			$sql = "INSERT INTO requests (name,email,address, waste_type, date_time)
					VALUES ('$name', '$email', '$address','$waste_type','$date_time')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('Request Added')</script>";
				$name = "";
				$email = "";
        $address = "";
        $waste_type = "";
        $date_time = "";
        header("Location: citizen.php");
			} else {
				echo "<script>alert('Woops! Something Went Wrong.')</script>";
			}
      session_destroy();
  }

  else{
    echo "<script>alert('Enter registered email')</script>";
  }
}
		


?>
    
<!-- Request Form Area Container -->
<div class="formstyle">
        <form action="" method="POST">
            <br>
            <label for="name">Name:</label><br><br>
            <input type="text" id="name" name="name" placeholder="Enter your name"><br>
            <br>
            <label for="email">Email:</label><br><br>
            <input type="text" id="email" name="email1" placeholder="Enter email"><br>
            <br>
            <label for="address">Address:</label><br><br>
            <input type="text" id="address" name="address" placeholder="Enter your adresss"><br>
            <br>
            <label for="gtype">Waste Type:</label><br><br>
            <input type="text" id="waste_type" name="waste_type" placeholder="Enter waste type"><br>
            <br>
            <label for="amt">Schedule a date and time:</label><br><br>
            <input type="datetime-local" placeholder="Date and time" name="date_time" id="date">
            <br>
            <br style="line-height:40px ;">
            <button name="submit" class="big-button">SUBMIT</button>

        <form> 
    </div>
<!-- End page content -->
</div>


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

$email = $_SESSION['email'];

$query = "SELECT * from requests WHERE email = '$email'";
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